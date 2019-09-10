<?php	
	require 'myFunctions.php';	

	$linha  = readline('Digite a quantidade para linha da Matriz: ');
	$coluna = readline('Digite a quantidade para coluna da Matriz: ');
	$matriz = criarMatriz($linha, $coluna);

	echo "\n \n" . 'Matriz Normal' . "\n \n";
	printarMatriz($matriz);
	$matrizTransposta = matrizTransposta($matriz);

	echo "\n \n" . 'Matriz Transposta' . "\n \n";
	printarMatriz($matrizTransposta);
        
	function matrizTransposta($matriz){
		$matrizTransposta = [];
		for($i=0; $i<count($matriz); $i++){
			for($j=0; $j<count($matriz[$i]); $j++){
				$matrizTransposta[$j][$i] = $matriz[$i][$j];
			}
		}
		return $matrizTransposta;
	};
