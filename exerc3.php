<?php
        $tamanho = readline('Digite o tamanho da Matriz: ');
        $matriz = [];
        for($i=0; $i<$tamanho; $i++){
                for($j = 0; $j<$tamanho; $j++){
                        $matriz[$i][$j] = rand(0, 9);
                        echo  $matriz[$i][$j] . ' ';
                }
                echo "\n";
        };
        
        $indice = readline('Digite o índice da linha para retorno: ');
        
        if($indice < 0 || $indice > $tamanho){
                echo 'Digite um valor válido.';
        } else {
                for($j = 0; $j < $tamanho; $j++){
                echo $matriz[$indice][$j] . ' ';
                }
                echo "\n";
        }
