<?php 
	$separator = readline("Digite o separador: ");
	if(empty($separator)){
		$separator = " ";
	}

	$elementos = [];

	for($i = 1; $i <=5; $i++){
		$elementos[$i] = readline("Digite o $i" .'º elemento: ') ;
	}
	
	foreach($elementos as $array) { 
		echo $array . $separator;
	}

