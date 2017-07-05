<?php

menu();

function perguntas($numMinimoDez, $numMaximoDez, $possibilidades, $valores)
{
    do {
        $is_valido = false;
        echo "Quantas dezenas você deseja apostar? \n";
        $numDezena = trim(fgets(STDIN));

        if ($numDezena > $numMaximoDez || $numDezena < $numMinimoDez) {
            echo "Insira um valor valido\n";
        } else {
            $is_valido = true;
        }

    } while ($is_valido == false);


    echo "Quantas apostas você deseja fazer?\n";
    $numDeApostas = trim(fgets(STDIN));

    for($i=1; $i <= $numDeApostas; $i++){
        echo "aposta $i: ";
        sorteio($possibilidades, $numDezena);
        echo "\n";
    }

    $valorDaAposta = $numDeApostas * $valores[$numDezena];
    echo "O valor da aposta é R$" . number_format($valorDaAposta, 2, ',', '.') . "\n";

    return $numDezena;
}

function sorteio($possibilidades, $numDezena)
{

    for ($i = 0; $i < $numDezena; $i++) {
        $valorFinal[] = rand(1, $possibilidades);
        $j = 0;

        while ($j != $i) {

            while ($valorFinal[$i] == $valorFinal[$j]) {
                $valorFinal[$i] = rand(1, $possibilidades);
                $j = 0;
            }
            $j++;
        }
    }

    sort($valorFinal);
    foreach ($valorFinal as $resultado) {
        echo "$resultado - ";
    }
}


function menu()
{

    echo "1-Mega Sena \n";
    echo "2-Quina \n";
    echo "3-Lotomania \n";
    echo "4-Lotofácil \n";
    echo "5-Sair do jogo \n";
    echo "Qual jogo voce deseja? \n";

    $jogo = fgets(STDIN);


    switch ($jogo) {

        case 1:  //mega
            $valores = array(6 => 3.50, 7 => 24.50, 8 => 98, 9 => 294, 10 => 735, 11 => 1617, 12 => 3234, 13 => 6006, 14 => 10510.50, 15 => 17517.50);
            perguntas(6, 15, 60, $valores);
            echo "\n";
            menu();

            break;

        case 2: //quina
            $valores = array(5 => 1.50, 6 => 9, 7 => 31.50, 8 => 84, 9 => 189, 10 => 378, 11 => 693, 12 => 1188, 13 => 1930.50, 14 => 3003, 15 => 4504.50);
            perguntas(5, 15, 80, $valores);
            echo "\n";
            menu();
            break;


        case 3: //lotomania
            $valores = array(50 => 1.50);
            perguntas( 50, 50, 100, $valores);

            echo "\n";
            menu();
            break;

        case 4: //lotofacil
            $valores = array(15 => 2, 16 => 32, 17 => 272, 18 => 1632);
            perguntas(15, 18, 25, $valores);
            echo "\n";
            menu();
            break;

        case 5: //sair da aplicação
            exit();
            break;

        default :
            echo "opcao invalida \n";
            menu();
            break;
    }
}