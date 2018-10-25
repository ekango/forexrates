<?php
// This is a class to pull forex exchange rates from fixer.io api
//Can pull latest rates and historical rates since 1999
class forexRates{
	//declare variables
	$base_cur;
	$foreign_cur;
	$forex_rate;
	//$API_Endpoints = array(
		//latest_url => 'http://api.fixer.io/latest',
		//historical_url => 'http://api.fixer.io/'
	);
	//get specific forex rate
	public function getRate($base_cur,$foreign_cur){
		$rate = file_get_contents('http://api.fixer.io/latest?'symbols=$base_cur,$foreign_cur);

		if($rate !== false){
			//Print out the rate.
			echo $rate;
			return $rate;
		}else{
			echo "No exchange rate received";
		};


	}
	//
	public function getRates($base_cur){
		$rates = file_get_contents('http://api.fixer.io/latest?'symbols=$base_cur);

		if($rates !== false){
			//Print out the rate.
			echo $rates;
			return $rates;
		}else{
			echo "No exchange rates received";

		};

		
	}

	public function getHistoricalRates($date,$base_cur){
		$historicalrates = file_get_contents('http://api.fixer.io/'$date?symbols=$base_cur);

		if($historicalrates !== false){
			//Print out the rate
			echo $historicalrates;
			return $historicalrates;
		}else{
			echo "No historical exchange rates received";
		};

		
	}
}
?>