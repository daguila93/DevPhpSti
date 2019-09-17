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

	$matrizComElementosString = retornaMatrizComElementosString($matrizTransposta);
	var_dump($matrizComElementosString);
	$retornaVetorComLarguraDasColunas = retornaVetorComMaioresElementosDoArray($matrizComElementosString);
	var_dump($retornaVetorComLarguraDasColunas);
	$matrizNormalComElementosString = matrizTransposta($matrizComElementosString);
	var_dump($matrizNormalComElementosString);

	$matrizComElementosDeMesmoTamanhos = retornaMatrizComElementosDeMesmoTamanho($matrizNormalComElementosString, $retornaVetorComLarguraDasColunas);
	printarMatriz($matrizNormalComElementosString);
