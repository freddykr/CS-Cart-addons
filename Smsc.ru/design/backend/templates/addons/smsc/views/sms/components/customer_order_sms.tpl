{__("addons.smsc.dear")} {$order.firstname} {$order.lastname}, {__("addons.smsc.your_order")} #{$order_id} {__("addons.smsc.sms_for_the_sum")} {include file="common/price.tpl" value=$total} {__("addons.smsc.is")} {$order_status_name}