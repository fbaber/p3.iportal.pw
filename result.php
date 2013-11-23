<?php


if($_POST){
	
	// $temp = $_POST['temprature'];
	// $convertto = $_POST['convertto'];
	// echo $temp.'---'.$convertto;
	
	// $Currency1 = $_POST['currency1'];
	// $Currency2 = $_POST['currency2'];
	// $Value = $_POST['value'];
	
	// echo $Currecy1.' '.$Currency2.' '.$Value;
	
	$currency1 = $_POST['currency1'];
	$currency2 = $_POST['currency2'];
	$value = $_POST['value'];
 
	// echo $currency1.'---'.$currency2.'--'.$value;
	
	
	echo "<h1> Currency loaded </h1>";

// Create an object to convert Australian Dollars to Euros.
    require 'fx.php';
    $fx = new ForeignExchange($currency1, $currency2);

// This function formats a value with 2 decimal places.
    function fmtMoney($amount)
    {
        return sprintf('.%.2f', $amount);
    }

    $auPrice = $value;

    echo '<p>'.fmtMoney($auPrice).' '.$currency1.' is approximately '. fmtMoney($fx->toForeign($auPrice))
        .' in '. $currency2.' Currency'.'</p>';
}

echo '<br/>';
echo 'form submitted';


?>