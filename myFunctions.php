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
	
	function adicionaEspacosEmBranco($string, $tamanho){
	        $elementoGrande = '';
	        $espacos = $tamanho - strlen($string);
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

