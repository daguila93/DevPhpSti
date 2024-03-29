<?php

	function printarMatriz($matriz, $alinhamentoColuna = false){
			foreach($matriz as $value){
				foreach($value as $valor){
					echo $valor;
				};
				echo  "\n";
			}
	}
	
	function criarMatriz($linha, $coluna){
		$matriz = [];
		for($i=0; $i<$linha; $i++){
			for($j=0; $j<$coluna; $j++){
			        $matriz[$i][$j] =  rand(0, 9);
			}
		}
		return $matriz;
	}

	function matrizTransposta($matriz){
        $matrizTransposta = [];
        for($i=0; $i<count($matriz); $i++){
               for($j=0; $j<count($matriz[$i]); $j++){
                       $matrizTransposta[$j][$i] = $matriz[$i][$j];
               }
        }
        return $matrizTransposta;
	}

	function retornaMatrizComElementosString($matriz){
		$matrizComElementosString = array();
		for($i=0; $i<count($matriz); $i++){
                         for($j=0; $j < count($matriz[$i]); $j++){
                                 $matrizComElementosString[$i][$j] = ''.$matriz[$i][$j];
                         }
                 }
		return $matrizComElementosString;
	}

	function retornaMatrizComElementosDeMesmoTamanho($matriz){
		$maioresTamanhos = retornaVetorComMaioresElementosDoArray($matriz);
		$matrizNova = array();
		$quantidadeDeColunas = count($matriz);
		
		for($i=0; $i< $quantidadeDeColunas; $i++){
			if(isVetorContemNumerico($matriz[$i])){
				$matrizNova[$i] = retornaVetorComElementosDeMesmoTamanhoAlinhadoADireita($matriz[$i], $maioresTamanhos[$i]);
			} else {
				$matrizNova[$i] = retornaVetorComElementosDeMesmoTamanho($matriz[$i], $maioresTamanhos[$i]);
			}
		}
		return $matrizNova;
	}

	function isVetorContemNumerico($coluna){
	    for ($j = 0; $j < count($coluna); $j++) {
	        if ($j!=0){
                if(!is_numeric($coluna[$j]) &&  $coluna[$j] != ''){
                    return false;
                }
                return true;
            } else {
	            continue;
            }

        }
    }

	function adicionarPipesNaMatriz($matriz){
		$matrizComPipe = $matriz;
        for ($i=0; $i < count($matrizComPipe); $i++) {
            for ($j=0; $j < count($matrizComPipe[$i]); $j++){
                $matrizComPipe[$i][$j] ='|'.$matriz[$i][$j];
                if($j == count($matrizComPipe[$i]) -1 ){
                    $matrizComPipe[$i][$j] = $matrizComPipe[$i][$j].'|';
                }
            }
        }
		return $matrizComPipe;
	}