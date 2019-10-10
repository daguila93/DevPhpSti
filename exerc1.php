<?php
    require('myFunctions.php');

    echo 'That\'s the program which puts a separator between words' .  PHP_EOL . PHP_EOL;
    $separator = readSingleCharacterSeparator();
    $array = readElements();
    arrayPrint(addSeparator($array, $separator));
    echo PHP_EOL;

