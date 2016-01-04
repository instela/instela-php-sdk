<?php
/**
 * Pagination Object
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


class Pagination extends Model
{
    /**
     * @var int $per_page
     */
    protected $per_page;

    /**
     * @var int $total_objects
     */
    protected $total_objects;

    /**
     * @var int $current_page
     */
    protected $current_page;

    /**
     * @var int $total_pages
     */
    protected $total_pages;

    /**
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * @param int $per_page
     */
    public function setPerPage($per_page)
    {
        $this->per_page = $per_page;
    }

    /**
     * @return int
     */
    public function getTotalObjects()
    {
        return $this->total_objects;
    }

    /**
     * @param int|null $total_objects
     */
    public function setTotalObjects($total_objects)
    {
        $this->total_objects = $total_objects;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->current_page;
    }

    /**
     * @param int $current_page
     */
    public function setCurrentPage($current_page)
    {
        $this->current_page = $current_page;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * @param int|null $total_pages
     */
    public function setTotalPages($total_pages)
    {
        $this->total_pages = $total_pages;
    }

}
