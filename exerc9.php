<?php
	require('myFunctions.php');
	
	$vetor = criaVetorComElementosCondicionais();
	
	$string = readline('Digite o caracter separador: ');
	$separadorInicoFim = readline('Digite o caracter separador de Início e Fim: ');
	$separador = recebeSeparadorDeUmCaracter($string);
	$separadorInicioEFim = recebeSeparadorDeUmCaracter($separadorInicoFim);
	$tamanhoDoMaiorElemento = maiorQuantidadeCaracteres($vetor);
	
	echo printaElementoSeparador($separadorInicoFim, $tamanhoDoMaiorElemento) . "\n";
	printaVetorComSeparador($vetor, $separador, $tamanhoDoMaiorElemento);
	echo printaElementoSeparador($separadorInicoFim, $tamanhoDoMaiorElemento) . "\n";
