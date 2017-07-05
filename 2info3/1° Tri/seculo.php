<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/17
 * Time: 13:29
 */

function retornaSeculo($ano){
    $divisao = $ano/100;
    $seculo = ceil($divisao);



    return $seculo;
}