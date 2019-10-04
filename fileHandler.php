<?php
/**
 * filePath é o caminho para o arquivo CSV
 * @param $filePath
 * @return array
 */
        function fileReader($filePath){
            if (($handle = fopen($filePath, "r")) !== FALSE) {
                $array = array();
                while(! feof($handle))  {
                    $result = fgetcsv($handle, ',');
                    array_push($array, $result);
                }

                fclose($handle);
            }
            array_pop($array);
            return trimmedElements($array);
        }

        function trimmedElements($array){
            $arrayTrimmed = array();
            foreach ($array as $value){
                array_push($arrayTrimmed, array_map('trim', $value));
            }
            return $arrayTrimmed;
        }