<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/17
 * Time: 13:25
 */
function trocaValores($a,$b){
    $auxiliar = 0;
    $auxiliar = $a;
    $a = $b;
    $b = $auxiliar;

    return $a.$b;
}