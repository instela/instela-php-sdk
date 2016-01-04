<?php
/**
 * Message Object
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
namespace Instela\SDK\Model;


class Message implements Model
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var User $sender
     */
    protected $sender;

    /**
     * @var User $receiver
     */
    protected $receiver;

    /**
     * @var \DateTime $read_at
     */
    protected $read_at;

    /**
     * @var \DateTime $sent_at
     */
    protected $sent_at;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param User $sender
     */
    public function setSender(User $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param User $receiver
     */
    public function setReceiver(User $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return \DateTime
     */
    public function getReadAt()
    {
        return $this->read_at;
    }

    /**
     * @param \DateTime $read_at
     */
    public function setReadAt(\DateTime $read_at = null)
    {
        $this->read_at = $read_at;
    }

    /**
     * @return \DateTime
     */
    public function getSentAt()
    {
        return $this->sent_at;
    }

    /**
     * @param \DateTime $sent_at
     */
    public function setSentAt(\DateTime $sent_at)
    {
        $this->sent_at = $sent_at;
    }


}
