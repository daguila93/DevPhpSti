<?php
	require('myFunctions.php');
	$separadorInicial = '[';
	$separadorFinal = ']';
	$matriz = array(
			 array(1, 'Charmander'),
			 array(3, 'Ivete'),
			 array(234, 121),
			 array(-890, 'Hallowed Be Thy Name')
		);

	$matrizTransposta = matrizTransposta($matriz);
	printarMatriz($matrizTransposta);
	
	$matrizTranspostaNormalizada = retornaMatrizComElementosDeMesmoTamanho($matrizTransposta);
	var_dump($matrizTranspostaNormalizada);
	$novaMatriz = matrizTransposta($matrizTranspostaNormalizada);

	printaMatrizComSeparadorDeInicioEFim($novaMatriz, $separadorInicial, $separadorFinal);

