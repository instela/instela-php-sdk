<?php
/**
 * Phpunit bootstrap for integration tests
 *
 * PHP version 5
 *
 * @category  Instela
 * @package   Instela
 * @author    Cagatay Gürtürk <cagatay@instela.com>
 * @copyright 2015 Instela
 * @license   Proprietary license.
 * @link      http://instela.com
 */
date_default_timezone_set('Europe/Istanbul');
define('BASE_PATH', realpath(__DIR__));
include_once(__DIR__ . '/../vendor/autoload.php');
