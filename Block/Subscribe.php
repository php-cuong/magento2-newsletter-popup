<?php

/**
 * @Author: Ngo Quang Cuong
 * @Date:   2017-10-29 21:58:28
 * @Last Modified by:   https://www.facebook.com/giaphugroupcom
 * @Last Modified time: 2017-10-29 22:26:47
 */

/**
 * Newsletter subscribe block
 *
 * @author      GiaPhuGroup Ltd. <bestearnmoney87@gmail.com>
 */

namespace PHPCuong\Newsletter\Block;

class Subscribe extends \Magento\Framework\View\Element\Template
{
    /**
     * Retrieve form action url and set "secure" param to avoid confirm
     * message when we submit form from secure page to unsecure
     *
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('phpcuong_newsletter/subscriber/new', ['_secure' => true]);
    }
}
