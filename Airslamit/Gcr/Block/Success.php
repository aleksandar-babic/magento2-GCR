<?php
namespace Airslamit\Gcr\Block;
class Success extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;
 
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession) {

        parent::__construct($context);
        $this->_checkoutSession = $checkoutSession;
    }

    public function getOrder() {
        return $this->_checkoutSession->getLastRealOrder();
    }

    public function getOrderId() {
        $order = $this->_checkoutSession->getLastRealOrder();
        return $order->getEntityId();
    }

}