<?php
	include 'myFunctions.php';

	$linha  = readline('Digite a quantidade para linha da Matriz: ');
	$coluna = readline('Digite a quantidade para coluna da Matriz: ');
	$matriz = criarMatriz($linha, $coluna);

	printarMatriz($matriz);
	$indice = readline('Digite o índice da coluna da Matriz:');
	$matrizColuna = vetorColuna($indice, $matriz);
	printarVetor($matrizColuna, $indice);

	function printarVetor($vetorColuna){
		foreach($vetorColuna as $vetor){
			echo $vetor . ' ' . "\n";
		}
	};

	function vetorColuna($indice, $matriz){
		$vetorColuna = [];
		for($i=0; $i<count($matriz); $i++){
			$vetorColuna[$i] = $matriz[$i][$indice];
		}
		return $vetorColuna;
	};
