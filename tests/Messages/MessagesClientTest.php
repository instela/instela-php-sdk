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
use Instela\SDK\Model\ThreadList;
use Instela\SDK\Model\Pagination;
use Instela\SDK\Model\Thread;
use Instela\SDK\Model\Message;
use Instela\SDK\Model\User;

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
        $threadList = $client->getThreadList(['page' => $page]);


        /*
        $this->assertArrayHasKey('pagination', $threadList);
        $this->assertArrayHasKey('threads', $threadList);
        $this->assertEquals($page, $threadList['pagination']['current_page']);
        */
        $this->assertInstanceOf(ThreadList::class, $threadList);
        $this->assertInstanceOf(Pagination::class, $threadList->getPagination());

    }

    public function testGetConversation()
    {
        $client = $this->getClient(['token' => static::TOKEN]);
        $thread = $client->getThread(
            [
                'u1' => 213181,
                'u2' => 50
            ]
        );

        $this->assertInstanceOf(Thread::class, $thread);
        foreach ($thread->getMessages() as $message) {
            $this->assertInstanceOf(Message::class, $message);
            $this->assertInstanceOf(User::class, $message->getReceiver());
            $this->assertInstanceOf(User::class, $message->getSender());
            $this->assertEquals(\DateTime::class, $message->getSentAt());
        }
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
        );

        $this->assertInstanceOf(Message::class, $newMessage);
        $this->assertInstanceOf(\DateTime::class, $newMessage->getSentAt());
        $this->assertNotNull($newMessage->getId());
        $this->assertEquals($userId, $newMessage->getReceiver()->getId());
    }
}