<?php

namespace Airslamit\Gcr\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_GCR = 'gcr/';

    public function getConfigValue($field, $storeId = null) {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null) {
        return $this->getConfigValue(self::XML_PATH_GCR . 'general/' . $code, $storeId);
    }

    public function getStoreViewLanguageCode($storeId = null) {
        $localeCode = $this->scopeConfig->getValue(
            'general/locale/code',
            ScopeInterface::SCOPE_STORE,
            $storeId
        );

        //see https://support.google.com/merchants/answer/7105655
        //example locale code is 'en_US' or 'nl_NL'
        if (!empty($localeCode) && strpos($localeCode, '_') !== false) {
            $languageCode = explode('_', $localeCode)[0];
        } else {
            $languageCode = 'en';
        }

        return $languageCode;
    }
}