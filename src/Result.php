<?php
/**
 * Result Object
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
 * @ignore
 */
namespace Instela\SDK;

use Instela\SDK\Model\Model;
use Psr\Http\Message\ResponseInterface;
use JsonMapper;

class Result
{
    /**
     * @var JsonMapper $mapper
     */
    protected static $mapper;

    /**
     * @var ResponseInterface $response
     */
    protected $response;

    /**
     * @var Model $model
     */
    protected $model;

    /**
     * Result constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response, Model $model)
    {
        $this->response = $response;
        $this->model    = $model;
    }

    /**
     * @return JsonMapper
     */
    protected function getMapper()
    {
        if (null === self::$mapper) {
            self::$mapper = new JsonMapper();
        }

        return self::$mapper;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return Model
     */
    public function getResult()
    {
        return $this->getMapper()->map(json_decode($this->response->getBody()->getContents()), $this->model);
    }
}
