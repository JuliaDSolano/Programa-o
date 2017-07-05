<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/03/17
 * Time: 06:57
 */

$sorteio = rand(0,10);

do {
    echo "Digite um numero de 1 a 10 \n";
    $resposta = fgets(STDIN);

    if ($sorteio == $resposta) {
        echo "Voce venceu \n";

    } else echo "Voce perdeu \n";


}while ($resposta != $sorteio);

