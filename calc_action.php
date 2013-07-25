<?php

	echo "Doing the calculation" ;

//	var_dump( $_POST );

	$num1 = $_POST['num1'] ;
	$num2 = $_POST['num2'] ;
	$op   = $_POST['op'] ;  // can be add,subtract, etc

	$value = "unknown" ;

	switch ( $op )
	{
		case 'add' :
			$value = $num1 + $num2 ;
			break;
		case 'subtract' :
			$value = $num1 - $num2 ;
			break;
	}

	echo "<br>Result: $value" ;

?>

