<?php

$empty = '';

if (isset($_POST['degree'])) {
	$degree = $_POST['degree'];

	if ($degree == "") { 
		$empty = 'Please enter a degree.';
	}
}

	if (isset($degree) == true && empty($degree) == false) {
		
	    $scale = $_POST['scale'];
	    
	    if ($scale == 'celsius') {
	      $c2f = $degree*9/5+32;
	      $output = 'Fahrenheit: ' . ceil($c2f) . "&deg";
	    } else {
	      $f2c = ($degree-32)*5/9;
	      $output = 'Celsius: ' . ceil($f2c) . "&deg";
	      } 
	} 

?>