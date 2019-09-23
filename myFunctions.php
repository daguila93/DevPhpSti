<?php
	require('matriz.php');
		
	function criaVetorComElementosCondicionais(){
		$arr = array();
		do {
	    		array_push($arr, '' . readline('Informe o elemento para o vetor: '));
			$resposta = strtolower(readline('Deseja continuar? (s/n)'));

		} while ($resposta == 's');
		return 	$arr;
	}
	
	function printaVetorComPipe($arr, $alinhamento = false){
		if($alinhamento){
			$maiorTamanho = maiorQuantidadeCaracteres($arr);
			$vetorComElementosDeMesmoTamanho = retornaVetorComElementosDeMesmoTamanho($arr, $maiorTamanho);
			
			for($i=0; $i < count($arr); $i++){
				echo '| ' . $vetorComElementosDeMesmoTamanho[$i] . '  |' . "\n";
			}

		} else {
			foreach($arr as $array){
				echo '| ' . $array . ' |' . "\n";	
			};
		}
	}
	
	function maiorQuantidadeCaracteres($array){
		$tamanho=0;
		for($i=0; $i<count($array); $i++){
			if($tamanho <= strlen($array[$i])){
				$tamanho = strlen($array[$i]);
			}
		}
		return $tamanho;
	}

	function retornaVetorComMaioresElementosDoArray($matriz){

		$arrayDeTamanhos = array();
		for($i = 0; $i<count($matriz); $i++){

            $tamanho = 0;

			for($j=0; $j<count($matriz[$i]); $j++){
				if($tamanho<strlen($matriz[$i][$j])){
					$tamanho = strlen($matriz[$i][$j]);
				}
				$arrayDeTamanhos[$i] = $tamanho; 

			}
		}
		return $arrayDeTamanhos;
	}
	///////////////////////////////////////////////////////////////////////////////////////////
	function retornaVetorComElementosDeMesmoTamanho($array, $tamanho){
	        for($i=0; $i<count($array); $i++){
	                $array[$i] .= adicionaEspacosEmBranco($array[$i], $tamanho);
	        }
	        return $array;
	}
	
	function retornaVetorComElementosDeMesmoTamanhoAlinhadoADireita($array, $tamanho){
	        for($i=0; $i<count($array); $i++){
	                $array[$i] = adicionaEspacosEmBranco($array[$i], $tamanho) . $array[$i];
	        }
	        return $array;
	}
	///////////////////////////////////////////////////////////////////////////////////////////	
	function adicionaEspacosEmBranco($string, $tamanho){
	        $elementoGrande = '';
		$espacos = $tamanho - mb_strlen($string);
	        for($i=0; $i<$espacos; $i++){
	                $elementoGrande .= " ";
	        }
	        return $elementoGrande;
	}

	function recebeSeparadorDeUmCaracter($string){
		$separador = ' ';
		if(strlen($string)>1){
			echo 'Digite um separador com no máximo 1 caracter!' . "\n";
		} else {
			$separador = $string;
		}
		return $separador;
	}

	function printaVetorComSeparador($vetor, $separador, $tamanho, $alinhamento = false){
		if($alinhamento){
			for($i=0; $i<count($vetor); $i++){
				echo $vetor[$i] . "\n";
				if($i<(count($vetor))-1){
					echo printaElementoSeparador($separador, $tamanho) . "\n";
				}
                	}
		} else {
			for($i=0; $i<count($vetor); $i++){
				echo $vetor[$i] . "\n";
				if($i<(count($vetor))-1){
					echo printaElementoSeparador($separador, $tamanho) . "\n";
				}
                	}
		}
                
	}

	function printaElementoSeparador($separador, $tamanho){
		$buffer = '';
		for($i=0; $i<$tamanho; $i++){
			$buffer .= $separador;
		}
		return $buffer;
	}
	
		
	function printaVetorComSeparadorDeInicioEFIm($array, $separadorInicial, $separadorFinal){
		echo $separadorInicial;
		for($i = 0; $i< count($array); $i++){
			if($i<count($array)-1){
				$separador = '|';	
			} else {
				$separador = '';
			}
			echo $array[$i] . $separador;
		}
		echo "$separadorFinal \n";
	}

	function printarSeparadorDoTamanhoDaMatriz($arrayDeTamanhos, $separador = '*'){
		$quantidadeDePipesParaAdcionarNaLargura = count($arrayDeTamanhos);
		$larguraDasColunasSomadas = array_sum($arrayDeTamanhos);
		$larguraDaMatriz = $larguraDasColunasSomadas + $quantidadeDePipesParaAdcionarNaLargura ;
	    for($i = 0; $i <= $larguraDaMatriz; $i++){
	        echo $separador;
        }
	    echo "\n";
    }

    function receberDadosMatriz(){
	    $numeroDeLinhas = readline('Digite o número de Linhas: ');
	    $numeroDeColunas = readline('Digite o número de Colunas: ');
	    $matrizComDadosPreenchidos = array();
	    for($i=0; $i < $numeroDeLinhas; $i++){
		    for($j=0; $j < $numeroDeColunas; $j++){
			    $posicaoLinha = $i+1;
			    $posicaoColuna = $j+1;
			    $matrizComDadosPreenchidos[$i][$j] = readline("Digite o elemento da $posicaoLinha" . "ª linha, $posicaoColuna" ."ª coluna da matriz: ");
		    }
	    }
	
	    return $matrizComDadosPreenchidos;
    }
