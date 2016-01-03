<?php
/**
 * NotFoundException
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
 * Class NotFoundException
 *
 * NotFoundException is thrown when requested source is not found.
 * Check Exception message for further details.
 *
 * @package Instela\SDK\Exceptions
 */
class NotFoundException extends RequestException
{

}