<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 16/03/17
 * Time: 13:13
 */

$numero1  = array();
$numero2  = array();
$operacao = array();

for ($i = 0; $i < 3; $i++){
    echo  "Digite um numero: ";
    $numero1[$i] = fgets(STDIN);

    echo "Digite a operacao: ";
    $operacao[$i] = trim(fgets(STDIN));

    echo "Digite outro numero: ";
    $numero2[$i] = fgets(STDIN);

switch ($operacao[$i]){


    case '+':
        $resultado[$i] = $numero1[$i] + $numero2[$i];
    break;

    case '-':
        $resultado[$i] = $numero1[$i] - $numero2[$i];
        break;

    case '*':
        $resultado[$i] = $numero1[$i] * $numero2[$i];
        break;

    case '/':
        $resultado[$i] = $numero1[$i] / $numero2[$i];
        break;
}
    }

    print_r($resultado);

















