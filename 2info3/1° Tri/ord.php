<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 23/03/17
 * Time: 13:11
 */

    $numeros = [2, 12, -712, 500, 4];
    $tamanhoNim = count($numeros); // posso trocar pela função sort
    $posMenor = 0; // Apenas a posição no array

    for ($x=0; $x<5; $x++) {

        for ($i=$x; $i<5; $i++) {

            if ($numeros[$i] < $numeros[$posMenor]) {
                $posMenor = $i;

            }
        }

        $auxiliar = $numeros[$x];
        $numeros[$x] = $numeros[$posMenor];
        $numeros[$posMenor] = $auxiliar;

    }

        return $numeros;



    print_r($numeros);