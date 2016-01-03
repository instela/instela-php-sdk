<?php
/**
 * BadRequestException
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
 * Class BadRequestException
 *
 * BadRequestException is thrown when parameters used to fire request are not accepted by the API.
 * Check Exception message for further details.
 *
 * @package Instela\SDK\Exceptions
 */
class BadRequestException extends RequestException
{

}