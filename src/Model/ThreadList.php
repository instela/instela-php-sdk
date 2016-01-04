<?php
/**
 * Thread List Object
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


class ThreadList extends  Model
{
    /**
     * @var Pagination $pagination
     */
    protected $pagination;

    /**
     * @var Thread $threads
     */
    protected $threads;

    /**
     * @return Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     */
    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
    }

    /**
     * @return Thread[]
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * @param Thread[] $threads
     */
    public function setThreads(array $threads)
    {
        $this->threads = $threads;
    }


}
