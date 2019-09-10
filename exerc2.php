<?php
	$array = [];
	$separador = '';
        for($i=1; $i<=5; $i++){
        $array[$i] = readline('Digite o ' .  $i . 'º elemento: ');
        }
        echo '[';
        for($i = 1; $i<=5; $i++){
		if($i<4){
			$separador = '|';	
		} else {
			$separador = '';
		}
		echo $array[$i] . $separador;
        }
	echo "] \n";



