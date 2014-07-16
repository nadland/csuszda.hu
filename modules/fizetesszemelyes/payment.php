<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/fizetesszemelyes.php');

if (!$cookie->isLogged())
    Tools::redirect('authentication.php?back=order.php');
	
$offlinecardpayment = new fizetesszemelyes();
echo $offlinecardpayment->execPayment($cart);

include_once(dirname(__FILE__).'/../../footer.php');