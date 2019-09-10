<?php	
	require('myFunctions.php');
	$separador = '';
        $array = criaVetorComElementosCondicionais();
        echo '[';
        for($i = 0; $i< count($array); $i++){
		if($i<count($array)-1){
			$separador = '|';	
		} else {
			$separador = '';
		}
		echo $array[$i] . $separador;
        }
	echo "] \n";
