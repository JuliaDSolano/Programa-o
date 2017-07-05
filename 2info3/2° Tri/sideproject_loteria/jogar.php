<?php

    define('MEGASENA', 1);
    define('QUINA', 2);
    define('LOTOMANIA', 3);
    define('LOTOFACIL', 4);

    $nome            = $_GET['nome'];
    $jogoSelecionado = $_GET['jogoselecionado'];

    function regrasDoJogo($jogoSelecionado){

        $regras = [
            'mega'      =>['min_dezenas'=>6,   'max_dezenas'=>15, 'possibilidades'=>60],
            'quina'     =>['min_dezenas'=>5,   'max_dezenas'=>15, 'possibilidades'=>80],
            'lotomania' =>['min_dezenas'=>50,  'max_dezenas'=>50, 'possibilidades'=>100],
            'lotofacil' =>['min_dezenas'=>15,  'max_dezenas'=>18, 'possibilidades'=>25],

        ];

        return $regras;
    }

    switch ($jogoSelecionado){

        case MEGASENA:
           $regras = regrasDoJogo(MEGASENA);
           print_r($regras);
            break;

        case QUINA:
            echo "Carregar regras quina";
            break;

        case LOTOMANIA:
            echo "Carregar regras lotomania";
            break;

        case LOTOFACIL:
            echo "Carregar regras lotofacil";
            break;

        default:
            echo"Opção inválida!";
            break;
    }

    //Tudo pronto! Incluir a tela de apostas

    require 'tela_apostas.html';