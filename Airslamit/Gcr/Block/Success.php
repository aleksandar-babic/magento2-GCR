<?php
namespace Airslamit\Gcr\Block;
class Success extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;
    protected $_helperData;
 
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Airslamit\Gcr\Helper\Data $helperData) {

        parent::__construct($context);
        $this->_checkoutSession = $checkoutSession;
        $this->_helperData = $helperData;
    }

    public function getOrder() {
        return $this->_checkoutSession->getLastRealOrder();
    }

    public function getOrderId() {
        $order = $this->_checkoutSession->getLastRealOrder();
        return $order->getEntityId();
    }

    public function getConfigMerchantId() {
        return $this->_helperData->getGeneralConfig('merchant_id');
    }

    public function getConfigCountry() {
        return $this->_helperData->getGeneralConfig('delivery_country');
    }

    public function getConfigEstimatedDeliveryDate() {
        return $this->_helperData->getGeneralConfig('estimated_delivery_date');
    }

    public function getConfigOptInStyle() {
        return $this->_helperData->getGeneralConfig('opt_in_style');
    }

    public function getEstimatedDate() {
        $addDays = $this->getConfigEstimatedDeliveryDate() . ' days';
        return date('Y-m-d', strtotime($addDays));
    }
}