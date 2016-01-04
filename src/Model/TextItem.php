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


class TextItem extends Model
{

    /**
     * @var string $url
     */
    protected $url;

    /**
     * @var string $type
     */
    protected $type;

    /**
     * @var string $text
     */
    protected $text;

    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $version
     */
    protected $version;

    /**
     * @var string $author_name
     */
    protected $author_name;

    /**
     * @var string $author_url
     */
    protected $author_url;

    /**
     * @var string $provider_name
     */
    protected $provider_name;

    /**
     * @var string $provider_url
     */
    protected $provider_url;

    /**
     * @var string $cache_age
     */
    protected $cache_age;

    /**
     * @var string $thumbnail_url
     */
    protected $thumbnail_url;

    /**
     * @var int $thumbnail_width
     */
    protected $thumbnail_width;

    /**
     * @var int $thumbnail_height
     */
    protected $thumbnail_height;

    /**
     * @var string $description
     */
    protected $description;

    /**
     * @var int $width
     */
    protected $width;

    /**
     * @var int $height
     */
    protected $height;

    /**
     * @var string $html
     */
    protected $html;

    /**
     * @var float
     */
    protected $mean_alpha;

    /**
     * @return float
     */
    public function getMeanAlpha()
    {
        return $this->mean_alpha;
    }

    /**
     * @param float $mean_alpha
     */
    public function setMeanAlpha($mean_alpha)
    {
        $this->mean_alpha = $mean_alpha;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * @param string $author_name
     */
    public function setAuthorName($author_name)
    {
        $this->author_name = $author_name;
    }

    /**
     * @return string
     */
    public function getAuthorUrl()
    {
        return $this->author_url;
    }

    /**
     * @param string $author_url
     */
    public function setAuthorUrl($author_url)
    {
        $this->author_url = $author_url;
    }

    /**
     * @return string
     */
    public function getProviderName()
    {
        return $this->provider_name;
    }

    /**
     * @param string $provider_name
     */
    public function setProviderName($provider_name)
    {
        $this->provider_name = $provider_name;
    }

    /**
     * @return string
     */
    public function getProviderUrl()
    {
        return $this->provider_url;
    }

    /**
     * @param string $provider_url
     */
    public function setProviderUrl($provider_url)
    {
        $this->provider_url = $provider_url;
    }

    /**
     * @return string
     */
    public function getCacheAge()
    {
        return $this->cache_age;
    }

    /**
     * @param string $cache_age
     */
    public function setCacheAge($cache_age)
    {
        $this->cache_age = $cache_age;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnail_url;
    }

    /**
     * @param string $thumbnail_url
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        $this->thumbnail_url = $thumbnail_url;
    }

    /**
     * @return int
     */
    public function getThumbnailWidth()
    {
        return $this->thumbnail_width;
    }

    /**
     * @param int $thumbnail_width
     */
    public function setThumbnailWidth($thumbnail_width)
    {
        $this->thumbnail_width = $thumbnail_width;
    }

    /**
     * @return int
     */
    public function getThumbnailHeight()
    {
        return $this->thumbnail_height;
    }

    /**
     * @param int $thumbnail_height
     */
    public function setThumbnailHeight($thumbnail_height)
    {
        $this->thumbnail_height = $thumbnail_height;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    public function __toString()
    {
        if ($this->type == 'text') {
            return $this->text;
        }

        return $this->url . '';
    }
}