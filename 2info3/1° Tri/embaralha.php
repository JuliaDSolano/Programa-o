<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/17
 * Time: 14:00
 */
function embaralhaPalavra($palavra){

    $embaralhada = "";
    $letras = strlen($palavra);


    for($i = 0; $i < $letras; $i++){
        $embaralhada .= $palavra[rand (0, $letras-1)];

    }

    return strtoupper($embaralhada);
}

