{assign var="return_current_url" value=$config.current_url|escape:url}
<li>{btn type="list" text=__("resend_shipment_info") class="cm-confirm" href="shipments.resend?shipment_ids[]=`$shipment.shipment_id`&redirect_url=`$return_current_url`"}</li>
<li class="divider"></li>