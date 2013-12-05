<?php

// fx.php - PHP Code to convert currencies using Yahoo's currency conversion service.
// This code uses Curl functionlaity covered in class # 12 

class ForeignExchange
{
	private $fxRate;
	
	// create the function that converts one source currency to the other target currency 
	public function __construct($currencyBase, $currencyForeign)
	{
		$url = 'http://download.finance.yahoo.com/d/quotes.csv?s='
			.$currencyBase .$currencyForeign .'=X&f=l1';

		$c = curl_init($url);
		curl_setopt($c, CURLOPT_HEADER, 0);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		$this->fxRate = doubleval(curl_exec($c));
		curl_close($c);
	}

	public function toBase($amount)
	{
		if($this->fxRate == 0)
			return 0;
			
		return  $amount / $this->fxRate;
	}
	
	public function toForeign($amount)
	{
		if($this->fxRate == 0)
			return 0;
			
		return $amount * $this->fxRate;
	}
};

?>