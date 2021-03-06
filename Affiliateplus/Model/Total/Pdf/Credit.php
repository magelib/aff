<?php
/**
 * Magestore
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
 * @package     Magestore_Affiliateplus
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */
namespace Magestore\Affiliateplus\Model\Total\Pdf;

/**
 * Class Credit
 * @package Magestore\Affiliateplus\Model\Total\Pdf
 */
class Credit extends \Magento\Sales\Model\Order\Pdf\Total\DefaultTotal
{

    public function getTotalsForDisplay()
    {

        $discount = $this->getAmount();
        $fontSize = $this->getFontSize() ? $this->getFontSize() : 7;
        if(floatval($discount)){
            $discount = $this->getOrder()->formatPriceTxt($discount);
            if ($this->getAmountPrefix()){
                $discount = $this->getAmountPrefix().$discount;
            }
            $label = __('Paid by Affiliate Credit');
            $totals = array(
                array(
                    'label' => $label,
                    'amount' => $discount,
                    'font_size' => $fontSize,
                )
            );
            return $totals;
        }
    }

    /**
     * @return mixed
     */
    public function getAmount(){
        if ($this->getSource()->getAffiliateCredit()) {
            return $this->getSource()->getAffiliateCredit();
        }
        return $this->getOrder()->getAffiliateCredit();
    }
}
