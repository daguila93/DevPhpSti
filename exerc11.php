<?php
	$matriz = array(
			 array(1, 3, 234, -890),
			 array('Charmander', 'Ivete', 121, 'Hallowed Be Thy Name')
		);

	foreach($matriz as $value){
		foreach($value as $valor){
			echo $valor . ' ';
		}
		;
			echo  "\n";
	};
