## Magento 2 module for Google Customer Reviews (GCR) Opt-In survey

## How to install?
* Clone or download this repository
* Copy everything to /<magento2-path>/app/code
* run ```php bin/magento module:enable Airslamit_Gcr```
* run ```php bin/magento setup:upgrade```
* run ```php bin/magento setup:di:compile```
* run ```php bin/magento setup:static-content:deploy```
* Clear all caches
* Configure your values (values like merchant id, delivery country, etc..) in Stores -> Configuration -> Airslamit
> More informations about GCR values [here](https://support.google.com/merchants/answer/7106244?hl=en&ref_topic=7105160&authuser=0&visit_id=1-636572395050667202-2146512379&rd=1).

## What does this module do?
This module will add opt-in badge to your success.phtml (Order success page). Exact code that will be added is this
```javascript
<!-- BEGIN GCR Opt-in Module Code -->
<script src="https://apis.google.com/js/platform.js?onload=renderOptIn"
  async defer>
</script>

<script>
  window.renderOptIn = function() { 
    window.gapi.load('surveyoptin', function() {
      window.gapi.surveyoptin.render(
        {
          // REQUIRED
          "merchant_id":"MERCHANT_ID",
          "order_id": "ORDER_ID",
          "email": "CUSTOMER_EMAIL",
          "delivery_country": "COUNTRY_CODE",
          "estimated_delivery_date": "YYYY-MM-DD",

          // OPTIONAL
          "opt_in_style": "OPT_IN_STYLE"
        }); 
     });
  }
</script>
<!-- END GCR Opt-in Module Code -->
```
