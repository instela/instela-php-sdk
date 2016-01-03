<?php

/**
 * Messaging Client Test
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

use Instela\SDK\Messages\MessagesClient;

class MessagesClientTest extends \PHPUnit_Framework_TestCase
{

    const TOKEN = 'test_api_token';

    public function getClient(array $options = [])
    {
        return new MessagesClient($options);
    }

    /**
     * @expectedException Instela\SDK\Exceptions\UnauthorizedException
     */
    public function testUnAuthorizedAccess()
    {
        $client = $this->getClient(['token' => 'WRONG_TOKEN']);
        $client->getThread(
            [
                'u1' => 213181,
                'u2' => 50
            ]
        );
    }

    public function testGetConversationList()
    {
        $page       = 3;
        $client     = $this->getClient(['token' => static::TOKEN]);
        $threadList = $client->getThreadList(['page' => $page])->getResult();


        $this->assertArrayHasKey('pagination', $threadList);
        $this->assertArrayHasKey('threads', $threadList);
        $this->assertEquals($page, $threadList['pagination']['current_page']);
    }

    public function testGetConversation()
    {
        $client = $this->getClient(['token' => static::TOKEN]);
        $thread = $client->getThread(
            [
                'u1' => 213181,
                'u2' => 50
            ]
        )->getResult();

        $this->assertArrayHasKey('pagination', $thread);
        $this->assertArrayHasKey('participants', $thread);
        $this->assertArrayHasKey('messages', $thread);
    }

    public function testSendMessage()
    {
        $userId     = 6616;
        $client     = $this->getClient(['token' => static::TOKEN]);
        $newMessage = $client->sendMessage(
            [
                'receiver' => $userId,
                'message'  => 'test message from api'
            ]
        )->getResult();

        $this->assertNotNull($newMessage['id']);
        $this->assertEquals($userId, $newMessage['receiver']['id']);
    }
}