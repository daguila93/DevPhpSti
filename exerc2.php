<?php	
	require('myFunctions.php');
	$array = readElements();
	arrayPrint(arrayDecorated($array, '[', ']'));
    	echo PHP_EOL;
