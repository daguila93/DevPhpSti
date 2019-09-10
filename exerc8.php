<?php
	require('myFunctions.php');
	
	$vetor = criaVetorComElementosCondicionais();

	$string = readline('Digite o caracter separador: ');
	$separador = recebeSeparadorDeUmCaracter($string);
	$tamanhoDoMaiorElemento = maiorQuantidadeCaracteres($vetor);
	
	printaVetorComSeparador($vetor, $separador, $tamanhoDoMaiorElemento);
