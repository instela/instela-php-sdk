<?php
namespace InstelaApiClient;

require_once('vendor/autoload.php');


use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;

class HttpBin
{

}

$client      = new Client();
$description = new Description(
    [
        'baseUrl'    => 'http://httpbin.org/',
        'operations' => [
            'testing' => [
                'httpMethod'    => 'GET',
                'uri'           => '/get',
                'responseModel' => 'getResponse',
                'parameters'    => [
                    'foo' => [
                        'type'     => 'string',
                        'location' => 'query'
                    ],
                    'bar' => [
                        'type'     => 'string',
                        'location' => 'query'
                    ]
                ]
            ]
        ],
        'models'     => [
            'getResponse' => [
                'type'                 => 'object',
                'responseClass'        => 'HttpBin',
                'additionalProperties' => [
                    'location' => 'json'
                ]
            ]
        ]
    ]
);

$guzzleClient = new GuzzleClient($client, $description);

$result = $guzzleClient->testing(['foo' => 'bar']);
echo print_r($result);