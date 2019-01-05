<?php


$length = array(
	'meter' => array('meter'	=> 1,
					'inches'=> 39.37,
					'yard'	=> 1.094,
					'feet'	=> 3.28,
					'mile'	=> 0.00062
					),
	'inches' => array('meter'	=> 0.0254,
					'inches'=> 1,
					'yard'	=> 0.0278,
					'feet'	=> 0.0833,
					'mile'	=> 0.0000158
					),
	'yard' => array('kilo'	=> 1,
					'pound'=> 2.205,
					'ounce'	=> 35.27,
					'ton'	=> 0.001,
					'stone'	=> 0.157
					),
	'feet' => array('meter'	=> 0.3048,
					'inches'=> 12,
					'yard'	=> 1.094,
					'feet'	=> 1,
					'mile'	=> 0.000189
					),
	'mile' => array('meter'	=> 1609.344,
					'inches'=> 63360,
					'yard'	=> 760,
					'feet'	=> 5280,
					'mile'	=> 1
					),
);



 		$converted 	= "";
	

 	if (isset($_POST['lenInput']) && !empty($_POST['lenInput']) && isset($_POST['inputUnit']) && !empty($_POST['inputUnit']) && isset($_POST['outputUnit']) && !empty($_POST['outputUnit'])) {
 		$inputUnit	= $_POST['inputUnit'];
 		$outputUnit = $_POST['outputUnit'];
 		$len 		= $_POST['lenInput'];
 	 	$converted = $len * $length[$inputUnit][$outputUnit];
 	echo $converted.' '.$outputUnit;
 		
 		}else{
 			$converted = 0;
 			$outputUnit = '';
 	 echo $converted.' '.$outputUnit;


 		} 	
?>