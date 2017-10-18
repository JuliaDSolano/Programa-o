
<?php

require_once "3_Tri/exercicios/pessoa.php";

$pessoa = new pessoa();
    $pessoa->nome = "Giovanna";
    $pessoa->idade  =  16;

    $pessoa->fazAniversario();

    echo "$pessoa->nome tem $pessoa->idade anos";