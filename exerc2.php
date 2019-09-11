<?php	
	require('myFunctions.php');
	$separador = '';
        $array = criaVetorComElementosCondicionais();
	$separadorInicial = '[';
	$separadorFinal = ']';
        printaVetorComSeparadorDeInicioEFIm($array, $separadorInicial, $separadorFinal);
