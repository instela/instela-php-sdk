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

use Psr\Http\Message\ResponseInterface;

class Result
{
    /**
     * @var ResponseInterface $response
     */
    protected $response;

    /**
     * Result constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function getResult()
    {
        return json_decode($this->getResponse()->getBody(), true);
    }
}
