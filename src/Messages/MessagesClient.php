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
 * This client is used to interact with the Instela Messaging service.
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
     * $thread = $messageClient->getThread(array(
     *     'page' => 1, // Optional, default = 1
     *     'per_page' => '25' // Optional, default = 1
     * ));
     * ```
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Result
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
     * ));
     *
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Result
     */
    public function getThread(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args());
    }


    /**
     * Sends message from the account of the authorized user.
     *
     * @param array $args Arguments
     *
     * @throws \GuzzleHttp\Exception\RequestException
     * @return Result
     */
    public function sendMessage(array $args = [])
    {
        return parent::__call(__FUNCTION__, func_get_args());
    }

}