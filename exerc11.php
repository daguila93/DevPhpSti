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
	//printarMatriz($matrizTransposta);

	$matrizComElementosString = retornaMatrizComElementosString($matrizTransposta);

	$matrizDeElementosDeMesmoTamanho = retornaMatrizComElementosDeMesmoTamanho($matrizComElementosString);

	$matrizNormalComElementosStringDeMesmoTamanho = matrizTransposta($matrizDeElementosDeMesmoTamanho);

	printarMatriz($matrizNormalComElementosStringDeMesmoTamanho);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
	$separador = '';
        $array = criaVetorComElementosCondicionais();
	$separadorInicial = '|';
	$separadorFinal = '|';
        printaVetorComSeparadorDeInicioEFIm($array, $separadorInicial, $separadorFinal);
*/
	
