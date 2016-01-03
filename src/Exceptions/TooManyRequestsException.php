<?php
/**
 * TooManyRequestsException
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
namespace Instela\SDK\Exceptions;

use GuzzleHttp\Exception\RequestException;

/**
 * Class TooManyRequestsException
 *
 * NotFoundException is thrown when your API key is throttled due to so many requests
 * Check Exception message for further details.
 *
 * @package Instela\SDK\Exceptions
 */
class TooManyRequestsException extends RequestException
{

}