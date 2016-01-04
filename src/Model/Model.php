<?php
/**
 * Model interface
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


abstract class Model implements \JsonSerializable
{
    public function jsonSerialize()
    {
        $vars           = get_object_vars($this);
        $normalizedText = $this->getTextAsHtml();
        if (null !== $normalizedText) {
            $vars = array_merge($vars, ['normalizedText' => $normalizedText]);
        }
        return $vars;
    }

    protected function getTextAsHtml()
    {
        return null;
    }
}
