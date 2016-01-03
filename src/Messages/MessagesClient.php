<?php
/**
 * Messaging Client
 *
 * PHP Version 5
 *
 * @category  Instela
 * @package   Instela
 * @author    Cagatay Gürtürk <cagatay@instela.com>
 * @copyright 2015 Instela
 * @license   Proprietary license.
 * @link      http://instela.com
 */

namespace Instela\SDK\Messages;

use Instela\SDK\InstelaClient;
use Instela\SDK\Result;

/**
 * This API is used to interact with the Instela Messaging service.
 *
 * All methods of this API requires a valid OAuth 2.0 access token.
 *
 * You can create a new instance for this API you can use the default constructor:
 *
 * ```php
 * use Instela\SDK\Messages;
 * $client = MessagesClient(array(
 *  'token' => 'ACCESS_TOKEN'
 * ));
 * ```
 *
 */
class MessagesClient extends InstelaClient
{
    /**
     * @ignore
     */
    const CONFIGURATION_NAME = 'messages';

    /**
     *
     * Gets thread list for the authorized user.
     *
     * **Example:**
     *
     * ```php
     * $thread = $messageClient->getThreadList(array(
     *     'page' => 1, // Optional, default = 1
     *     'per_page' => '25' // Optional, default = 1
     * ))->getResult();
     *
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Result Returns the thread list as an array. See the array content or API documentation for more information.
     */
    public function getThreadList(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args());
    }


    /**
     *
     * Gets the thread for the authorized user.
     *
     *
     * **Example:**
     *
     * ```php
     * $thread = $messageClient->getThread(array(
     *     'u1' => 1,  // User Id of the first participant of the message thread
     *     'u2' => 50, // User Id of the second participant of the message thread
     *     'page' => 1, // Optional, default = 1
     *     'per_page' => '25' // Optional, default = 1
     * ))->getResult();
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Result Returns the thread as an array. See the array content or API documentation for more information.
     */
    public function getThread(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args());
    }


    /**
     * Sends message from the account of the authorized user.
     *
     * **Example:**
     *
     * ```php
     * $thread = $messageClient->sendMessage(array(
     *     'receiver' => 1,  // User Id of the receiver
     *     'message' => "test message", // Message body
     * ))->getResult();
     * ```
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException Throws this exception
     * @return Result Returns the sent message as an array. See the array content or API documentation for more information.
     */
    public function sendMessage(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args());
    }

}