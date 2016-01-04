<?php
/**
 * Client main file
 *
 * PHP Version 5
 *
 * @category  Instela
 * @package   Instela
 * @author    Cagatay Gürtürk <cagatay@instela.com>
 * @copyright 2015 Instela
 * @license   Proprietary license.
 * @link      http://instela.com
 *
 */
namespace Instela\SDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Instela\SDK\Exceptions;

abstract class InstelaClient
{
    const VERSION = '0.1';
    const API_BASE = 'https://api.instela.com/v2/';
    const API_BASE_INTERNAL = 'http://api-internal.instela.com/v2/';

    const CONFIGURATION_NAME = '';

    public static $userAgent;

    public static function setUserAgent($userAgent)
    {
        self::$userAgent = $userAgent;
    }

    /**
     * @array
     */
    protected $credentials = [];

    /**
     * @array
     */
    protected $args = [];

    /**
     * @array
     */
    protected $api = [];

    /**
     * InstelaClient constructor.
     *
     * The client constructor accepts the following options:
     *
     * - credentials:
     *   (Aws\Credentials\CredentialsInterface|array|bool|callable) Specifies
     *   the credentials used to sign requests. Provide an
     *   Aws\Credentials\CredentialsInterface object, an associative array of
     *   "key", "secret", and an optional "token" key, `false` to use null
     *   credentials, or a callable credentials provider used to create
     *   credentials or return null. See Aws\Credentials\CredentialProvider for
     *   a list of built-in credentials providers. If no credentials are
     *   provided, the SDK will attempt to load them from the environment.
     *
     * @throws \Exception
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        $json      = file_get_contents(__DIR__ . '/data/' . static::CONFIGURATION_NAME . '.json');
        $this->api = json_decode($json, true);

        $this->args = $args;
        if (null === $this->api) {
            throw new \Exception("JSON Malformed");
        }
    }

    public function __call($name, array $args)
    {
        $params = isset($args[0]) ? $args[0] : [];
        if (substr($name, -5) === 'Async') {
            return $this->executeAsync(
                $this->getRequest(substr($name, 0, -5), $params),
                $this->api['operations'][ucfirst($name)]
            );
        }

        return $this->execute($this->getRequest($name, $params), $this->api['operations'][ucfirst($name)]);
    }

    /**
     * @param Request $command
     * @param array   $operation
     *
     * @return Result
     */
    public function execute(Request $command, $operation)
    {
        try {
            $client = new Client(
                [
                    'headers' => [
                        'User-Agent' => (null === self::$userAgent ? 'Instela-Api-Client ' . static::VERSION : self::$userAgent)
                    ]
                ]
            );

            $response = $client->send($command);
            $result   = new Result($response);
            return $result;
        } catch (RequestException $e) {
            if (isset($operation['errors'][$e->getCode()])) {
                $exceptionName = 'Instela\\SDK\\Exceptions\\' . $operation['errors'][$e->getCode()]['shape'];
                $json          = json_decode($e->getResponse()->getBody(), true);
                throw new $exceptionName($json['message'], $e->getRequest(), $e->getResponse());
            }
        }
    }

    /**
     * @param Request $command
     * @param array   $operation
     *
     * @return bool
     */
    public function executeAsync(Request $command, $operation)
    {
        $client = new Client();
        $client->sendAsync($command)->then(
            function ($response) {

            }
        )->wait();
        return true;
    }

    /**
     * @param       $name
     * @param array $args
     *
     * @return Request
     */
    public function getRequest($name, array $args = [])
    {
        // Fail fast if the command cannot be found in the description.
        if (!isset($this->api['operations'][$name])) {
            $name = ucfirst($name);
            if (!isset($this->api['operations'][$name])) {
                throw new \InvalidArgumentException("Operation not found: $name");
            }
        }

        $operation = $this->api['operations'][$name];

        $requestUri = $operation['http']['requestUri'];

        $normalizedArguments = preg_replace_callback(
            '({\w.})', function ($match) use ($args) {
            $argValue = str_replace(
                ['{', '}'], [], $match[0]
            );

            if (isset($args[$argValue])) {
                return $args[$argValue];
            } else {
                throw new \InvalidArgumentException('Argument ' . $argValue . ' not found');
            }
        }, $requestUri
        );

        $body    = [];
        $headers = [];
        if (isset($this->args['token'])) {
            $headers['Authorization'] = 'Bearer ' . $this->args['token'];
        }

        $headers['Content-Type'] = 'application/json';

        $queryParameters = null;
        if (isset($operation['parameters']) && is_array($operation['parameters'])) {
            foreach ($operation['parameters'] as $parameter) {

                if (!isset($args[$parameter['name']])) {
                    continue;
                }

                if ($parameter['location'] == "query") {
                    $queryParameters .= $parameter['name'] . '=' . urlencode($args[$parameter['name']]);
                }

                if ($parameter['location'] == "body") {
                    $body[$parameter['name']] = $args[$parameter['name']];
                }
            }


            if (!isset($args['internal']) || false === $args['internal']) {
                $url = static::API_BASE . $this->api['metadata']['endpointPrefix'] . $normalizedArguments;
            } else {
                $url = static::API_BASE_INTERNAL . $this->api['metadata']['endpointPrefix'] . $normalizedArguments;
            }

            if (null !== $queryParameters) {
                $url .= '?' . $queryParameters;
            }

            $request = new Request($operation['http']['method'], $url, $headers, json_encode($body));

            return $request;
        }
    }
}