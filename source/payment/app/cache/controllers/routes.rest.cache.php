<?php
return array("/payment/payment/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\PaymentController","action"=>"delete","parameters"=>array("*"),"name"=>"PaymentController-delete","cache"=>false,"duration"=>false)),"/payment/paypal/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\PaypalController","action"=>"delete","parameters"=>array("*"),"name"=>"PaypalController-delete","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"delete","parameters"=>array("*"),"name"=>"GiftCardAdminController-delete","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/delete/(.*?)"=>array("delete"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"delete","parameters"=>array("*"),"name"=>"PaypalAdminController-delete","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/getAll/"=>array("get"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"getAll","parameters"=>array(),"name"=>"GiftCardAdminController-getAll","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/(index/)?"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"index","parameters"=>array(),"name"=>"PaypalAdminController-index","cache"=>false,"duration"=>false),"/payment/paypalAdmin/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"PaypalAdminController-get","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"PaypalAdminController-getOne","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"update","parameters"=>array("*"),"name"=>"PaypalAdminController-update","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/add/"=>array("post"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"add","parameters"=>array(),"name"=>"PaypalAdminController-add","cache"=>false,"duration"=>false)),"/payment/paypal/getActivatedAccount/"=>array("get"=>array("controller"=>"controllers\\PaypalController","action"=>"getActivatedAccount","parameters"=>array(),"name"=>"PaypalController-getActivatedAccount","cache"=>false,"duration"=>false)),"/payment/paypalAdmin/connect/"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"connect","parameters"=>array(),"name"=>"PaypalAdminController-connect","cache"=>false,"duration"=>false),"/payment/paypalAdmin/addPaypalAccount/"=>array("post"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"addPaypalAccount","parameters"=>array(),"name"=>"PaypalAdminController-addPaypalAccount","cache"=>false,"duration"=>false)),"/payment/paypal/updateActivatedAccount/"=>array("patch"=>array("controller"=>"controllers\\PaypalController","action"=>"updateActivatedAccount","parameters"=>array(),"name"=>"PaypalController-updateActivatedAccount","cache"=>false,"duration"=>false)),"/payment/paypal/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaypalController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"PaypalController-get","cache"=>false,"duration"=>false)),"/payment/paypal/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaypalController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"PaypalController-getOne","cache"=>false,"duration"=>false)),"/payment/paypal/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\PaypalController","action"=>"update","parameters"=>array("*"),"name"=>"PaypalController-update","cache"=>false,"duration"=>false)),"/payment/paypal/add/"=>array("post"=>array("controller"=>"controllers\\PaypalController","action"=>"add","parameters"=>array(),"name"=>"PaypalController-add","cache"=>false,"duration"=>false)),"/payment/paypal/(index/)?"=>array("controller"=>"controllers\\PaypalController","action"=>"index","parameters"=>array(),"name"=>"PaypalController-index","cache"=>false,"duration"=>false),"/payment/paypalAdmin/updatePaypalAccount/"=>array("put"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"updatePaypalAccount","parameters"=>array(),"name"=>"PaypalAdminController-updatePaypalAccount","cache"=>false,"duration"=>false)),"/payment/payment/connect/"=>array("controller"=>"controllers\\PaymentController","action"=>"connect","parameters"=>array(),"name"=>"PaymentController-connect","cache"=>false,"duration"=>false),"/payment/paypalAdmin/getAll/"=>array("get"=>array("controller"=>"controllers\\PaypalAdminController","action"=>"getAll","parameters"=>array(),"name"=>"PaypalAdminController-getAll","cache"=>false,"duration"=>false)),"/payment/payment/getAll/"=>array("get"=>array("controller"=>"controllers\\PaymentController","action"=>"getAll","parameters"=>array(),"name"=>"PaymentController-getAll","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/updateGiftCard/"=>array("put"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"updateGiftCard","parameters"=>array(),"name"=>"GiftCardAdminController-updateGiftCard","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"GiftCardAdminController-get","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"GiftCardAdminController-getOne","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"update","parameters"=>array("*"),"name"=>"GiftCardAdminController-update","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/add/"=>array("post"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"add","parameters"=>array(),"name"=>"GiftCardAdminController-add","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/(index/)?"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"index","parameters"=>array(),"name"=>"GiftCardAdminController-index","cache"=>false,"duration"=>false),"/payment/giftCardAdmin/connect/"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"connect","parameters"=>array(),"name"=>"GiftCardAdminController-connect","cache"=>false,"duration"=>false),"/payment/payment/addPayment/"=>array("post"=>array("controller"=>"controllers\\PaymentController","action"=>"addPayment","parameters"=>array(),"name"=>"PaymentController-addPayment","cache"=>false,"duration"=>false)),"/payment/giftCardAdmin/addGiftCard/"=>array("post"=>array("controller"=>"controllers\\GiftCardAdminController","action"=>"addGiftCard","parameters"=>array(),"name"=>"GiftCardAdminController-addGiftCard","cache"=>false,"duration"=>false)),"/payment/payment/updatePayment/"=>array("put"=>array("controller"=>"controllers\\PaymentController","action"=>"updatePayment","parameters"=>array(),"name"=>"PaymentController-updatePayment","cache"=>false,"duration"=>false)),"/payment/payment/updateStatus/"=>array("patch"=>array("controller"=>"controllers\\PaymentController","action"=>"updateStatus","parameters"=>array(),"name"=>"PaymentController-updateStatus","cache"=>false,"duration"=>false)),"/payment/payment/get/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaymentController","action"=>"get","parameters"=>array("~0","~1","~2"),"name"=>"PaymentController-get","cache"=>false,"duration"=>false)),"/payment/payment/getOne/(.+?)/(.*?)"=>array("get"=>array("controller"=>"controllers\\PaymentController","action"=>"getOne","parameters"=>array(0,"~1","~2"),"name"=>"PaymentController-getOne","cache"=>false,"duration"=>false)),"/payment/payment/update/(.*?)"=>array("patch"=>array("controller"=>"controllers\\PaymentController","action"=>"update","parameters"=>array("*"),"name"=>"PaymentController-update","cache"=>false,"duration"=>false)),"/payment/payment/add/"=>array("post"=>array("controller"=>"controllers\\PaymentController","action"=>"add","parameters"=>array(),"name"=>"PaymentController-add","cache"=>false,"duration"=>false)),"/payment/payment/(index/)?"=>array("controller"=>"controllers\\PaymentController","action"=>"index","parameters"=>array(),"name"=>"PaymentController-index","cache"=>false,"duration"=>false),"/payment/paypal/connect/"=>array("controller"=>"controllers\\PaypalController","action"=>"connect","parameters"=>array(),"name"=>"PaypalController-connect","cache"=>false,"duration"=>false));