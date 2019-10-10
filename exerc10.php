<?php

	require('myFunctions.php');
	
        $vetorTemporario = readElements();
	
	$string = readline('Digite o caracter separador: ');
	$separadorInicoFim = readline('Digite o caracter separador de Início e Fim: ');
	$separador = recebeSeparadorDeUmCaracter($string);
	$separadorInicioEFim = recebeSeparadorDeUmCaracter($separadorInicoFim);
	$tamanhoDoMaiorElemento = maiorQuantidadeCaracteres($vetorTemporario);
	$vetor = retornaVetorComElementosDeMesmoTamanhoAlinhadoADireita($vetorTemporario, $tamanhoDoMaiorElemento);
	
	echo printaElementoSeparador($separadorInicoFim, $tamanhoDoMaiorElemento) . "\n";
	printaVetorComSeparador($vetor, $separador, $tamanhoDoMaiorElemento, true);
	echo printaElementoSeparador($separadorInicoFim, $tamanhoDoMaiorElemento) . "\n";
