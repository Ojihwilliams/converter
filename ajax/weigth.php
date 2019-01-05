<?php



$weight = array(
	'kilo' => array('kilo'	=> 1,
					'pound'	=> 2.205,
					'ounce'	=> 35.27,
					'ton'	=> 0.001,
					'stone'	=> 0.157
					),
	'pound' => array('kilo'	=> 0.454,
					'pound'	=> 1,
					'ounce'	=> 16,
					'ton'	=> 0.000454,
					'stone'	=> 0.08
					),
	'ounce' => array('kilo'	=> 0.0284,
					'pound'	=> 0.0625,
					'ounce'	=> 1,
					'ton'	=> 0.00003125,
					'stone'	=> 0.00446
					),
	'ton' => array('kilo'	=> 1000,
					'pound'	=> 2204.62,
					'ounce'	=> 32000,
					'ton'	=> 1,
					'stone'	=> 142.857
					),
	'stone' => array('kilo'	=> 6.35,
					'pound'=> 12.5,
					'ounce'	=> 224,
					'ton'	=> 0.007,
					'stone'	=> 1
					),
);

 		$converted 	= "";
	

 	if (isset($_POST['wegInput']) && !empty($_POST['wegInput']) && isset($_POST['inputUnit']) && !empty($_POST['inputUnit']) && isset($_POST['outputUnit']) && !empty($_POST['outputUnit'])) {
 		$inputUnit	= $_POST['inputUnit'];
 		$outputUnit = $_POST['outputUnit'];
 		$weg		= $_POST['wegInput'];
 	 	$converted = $weg * $weight[$inputUnit][$outputUnit];
 	 	echo $converted.' '.$outputUnit;
 		
 		}else{
 			$converted = 0;
 			$outputUnit = '';
 			echo $converted.' '.$outputUnit;


 		} 	


?>