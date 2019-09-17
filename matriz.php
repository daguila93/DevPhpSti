<?php

	function printarMatriz($matriz, $alinhamentoColuna = false){
			foreach($matriz as $value){
				foreach($value as $valor){
					echo $valor . ' ';
				};
				echo  "\n";
			};
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function retornaMatrizComElementosDeMesmoTamanho($matriz, $tamanhos){
		for($i=0; $i<count($matriz); $i++){
			for($j=0; $j<count($matriz[$i]); $j++){
                        	 $matriz[$i][$j] = adicionaEspacosEmBranco($matriz[$i][$j], $tamanhos[$i]);
			}
		}
                 return $matriz;
         }
 
         function retornaMatrizComElementosDeMesmoTamanhoAlinhadoADireita($matriz, $tamanhos){
		 for($i=0; $i<count($matriz); $i++){
		 	for($j=0; $j<count($matriz[$i]); $j++){
                 		$matriz[$i][$j] = adicionaEspacosEmBranco($matriz[$i][$j], $tamanho[$i]) . $matriz[$i][$j];
                  	}
		 }
		  return $matriz;
         }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function matrizTransposta($matriz){
                $matrizTransposta = [];
                for($i=0; $i<count($matriz); $i++){
                        for($j=0; $j<count($matriz[$i]); $j++){
                                $matrizTransposta[$j][$i] = $matriz[$i][$j];
                        }
                }
                return $matrizTransposta;
        };

	function printaMatrizComSeparadorDeInicioEFim($array, $separadorInicial, $separadorFinal){
		echo $separadorInicial;
		foreach($array as $arrayLinha){
			for($i=0; $i<count($arrayLinha); $i++){
				if($i<count($arrayLinha)-1){
					$separador = '';
				}
			}
		}
		echo "$separadorFinal \n";
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

	function retornaMatrizComSeparador($matriz){
		$maiorTamanho = retornaArrayComMaioresElementosDeCadaVetor($matriz);
		$matrizComSeparador = array();
		for($i=0; $i<count($matriz); $i++){
			for($j=0; $j < count($matriz[$i]); $j++){
			//	$matrizComSeparador[$i][$j] = //todo isNumeric();	
			}
		}
		return $matrizComSeparador;
	}
