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
use Instela\SDK\Model\Thread;
use Instela\SDK\Model\ThreadList;
use Instela\SDK\Model\Message;

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
     * $threadList = $messageClient->getThreadList(array(
     *     'page' => 1, // Optional, default = 1
     *     'per_page' => '25' // Optional, default = 1
     * ));
     *
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return ThreadList Returns a thread list object
     */
    public function getThreadList(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args())->getResult();
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
     * ));
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Thread Returns a thread object.
     */
    public function getThread(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args())->getResult();
    }


    /**
     * Sends message from the account of the authorized user.
     *
     * **Example:**
     *
     * ```php
     * $message = $messageClient->sendMessage(array(
     *     'receiver' => 1,  // User Id of the receiver
     *     'message' => "test message", // Message body
     * ));
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException Throws this exception
     * @return Message Returns the sent message.
     */
    public function sendMessage(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args())->getResult();
    }


    /**
     * Gets message with given id.
     *
     * **Example:**
     *
     * ```php
     * $message = $messageClient->getMessage(array(
     *     'id' => 1,  // Id of the message
     * ));
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException Throws this exception
     * @return Message Returns the found message.
     */
    public function getMessage(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args())->getResult();
    }
}