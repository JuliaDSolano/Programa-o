<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 22/03/17
 * Time: 11:02
 */

    function calculaAumento(float $salario, int $aumento){
        $salarioAumentado = $salario + ($salario * ($aumento/100));
        return $salarioAumentado; //devolveu o VALOR calculado
    }

    $salario = 4500;
    $salario = calculaAumento($salario, 25);

    if($salario > 5000){
        echo "Usuário deve pagar mais um imposto.";
    }