<?php


if($_POST){
	
	// echo $Currecy1.' '.$Currency2.' '.$Value;
	
	$currency1 = $_POST['currency1'];
	$currency2 = $_POST['currency2'];
	$value = $_POST['value'];
 
	// echo $currency1.'---'.$currency2.'--'.$value;
	
	
	echo "<h1> Currency converted per your request: </h1>";

// Create an object to convert source currency to target currency
    require 'fx.php';
    $fx = new ForeignExchange($currency1, $currency2);

// This function formats a value with 2 decimal places.
    function fmtMoney($amount)
    {
        return sprintf('%.2f', $amount);
    }

    $auPrice = $value;
	//echo '<p>'.fmtMoney($auPrice).' '.$currency1.' is approximately '. fmtMoney($fx->toForeign($auPrice))
    //    .' in '. $currency2.' Currency'.'</p>';
	echo '<br/>';
	echo '<p>'.'<b>'.fmtMoney($auPrice).'</b>'.' '.$currency1.' is approximately '.'<b>'. fmtMoney($fx->toForeign($auPrice))
    .'</b>'.' in '. $currency2.' Currency'.'</p>';
	echo '<br/>';
	echo '<p3>'.'*Note:The Exchange rates are delayed by 20 mins when markets are open.'.'</p3>';
	
}

?>