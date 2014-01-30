<?php
/**
 * Blueclaw Conversions Limited
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the License Agreement
 * that is bundled with this package in the file LICENCE.txt.
 * It is also available through the world-wide-web at this URL:
 * www.blueclawecommerce.co.uk/store/terms-conditions
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@blueclaw.co.uk so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file. If you wish to customize this extension for your
 * needs please contact us through www.blueclawecommerce.co.uk.
 *
 * @category    Blueclaw
 * @package     Blueclaw_OverEighteen
 * @copyright   Copyright (c) 2014 Blueclaw Conversions Ltd. (http://www.blueclawecommerce.co.uk)
 * @author      John Hickling <john@blueclaw.co.uk>
 * @license     http://blueclawecommerce.co.uk/store/terms-conditions Blueclaw Conversions Ltd End User Licence Agreement
 */
class Blueclaw_OverEighteen_Block_Check extends Mage_Core_Block_Template
{
    /**
     * If check if disabled or user is already marked as verified then don't show the check
     * @return string
     */
     protected function _toHtml()
     {
        if(! Mage::getStoreConfig('blueclaw_overeighteen/general/enabled') ||  Mage::helper('overeighteen')->isVerified() )
            return '';
        else
            return parent::_toHtml();
    }
}