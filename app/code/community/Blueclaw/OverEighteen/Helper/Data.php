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
class Blueclaw_OverEighteen_Helper_Data extends Mage_Core_Helper_Abstract{
    
    public function isVerified(){
        
        return Mage::getSingleton('core/cookie')->get('ageverified');
    }
    
    public function markAsVerified(){
        Mage::getSingleton('core/cookie')->set('ageverified', 'true' ,time()+86400,'/');
    }
    
    public function getCSS(){
        if(! $this->isVerified())
            return 'blueclaw/overeighteen/styles.css';
    }
    
    public function getJS(){
        if(! $this->isVerified())
            return 'blueclaw/overeighteen/verify.js';
    }
}