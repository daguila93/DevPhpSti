<?php
	require('myFunctions.php');
	require('fileHandler.php');

    $filePath  = './fileHandle/csv/mlb_players2.csv';

	$separadorInicial = '[';
	$separadorFinal = ']';
	
	//Se quiser essa matriz para teste
	$matriz = array(
			 array(1, 'Charmander', 'sdasdasdas', 10, 1000),
			 array(3, 'Ivete', 454564, 10, 1000),
			 array(234, 121, 'sadasdsa', 10, 'a'),
			 array(-890, 'Hallowed Be Thy Name', 'dsdasdasd', 100, 'bg')
		);

	$matrizComDadosPedidos =  fileReader($filePath); // Quando quiser receber dados do usuário, utilize isso: receberDadosMatriz();

	$matrizTransposta = matrizTransposta($matrizComDadosPedidos);

	$matrizComElementosString = retornaMatrizComElementosString($matrizTransposta);

	$matrizDeElementosDeMesmoTamanho = retornaMatrizComElementosDeMesmoTamanho($matrizComElementosString);

	$matrizNormalComElementosStringDeMesmoTamanho = matrizTransposta($matrizDeElementosDeMesmoTamanho);

	$matrizComPipe = adicionarPipesNaMatriz($matrizNormalComElementosStringDeMesmoTamanho);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $tamanhoDosMaioresElementosDasColunas = retornaVetorComMaioresElementosDoArray($matrizDeElementosDeMesmoTamanho);
    printarSeparadorDoTamanhoDaMatriz($tamanhoDosMaioresElementosDasColunas);
	printarMatriz($matrizComPipe);
    printarSeparadorDoTamanhoDaMatriz($tamanhoDosMaioresElementosDasColunas);

    centralizeTitle($matrizDeElementosDeMesmoTamanho);