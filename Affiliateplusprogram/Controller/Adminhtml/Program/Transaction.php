<?php

/**
 * Magestore.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Magestore
 * @package     Magestore_Affiliateplusprogram
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */
namespace Magestore\Affiliateplusprogram\Controller\Adminhtml\Program;

/**
 * Class Transaction
 * @package Magestore\Affiliateplusprogram\Controller\Adminhtml\Program
 */
class Transaction extends \Magestore\Affiliateplusprogram\Controller\Adminhtml\AbstractAction
{
    /**
     * Execute action
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

    }
}