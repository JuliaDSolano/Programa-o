<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 29/03/17
 * Time: 06:53
 */

    do {
        echo"Digite um numero: ";
        $numeros[] = fgets(STDIN);


        echo"Deseja continuar? S ou N : \n ";
        $condicao = trim (fgets(STDIN));

    }
    while ($condicao == 'Sim');

    function listaOpcoes(){

  echo" Digite 1: Imprimir o somatorio de seus elementos \n";
  echo" Digite 2: Imprimir a media de seus elementos \n";
  echo" Digite 3: Imprimir a media e a somatoria \n ";
  echo" Digite 4: Substituir por zero todos os valores negativos e imprimir a media \n";
  echo" Digite 5: Substituir por zero todos os valores repetidos e imprimir a media e a somatoria \n";
  echo" Digite 0: Sair da aplicação \n";

    $condicao = fgets(STDIN);

        switch($condicao) {

            case '1':
                $resultado = $soma;
                echo $resultado;
                break;

            case '2':
                $resultado = $media;
                echo $resultado;
                break;

            case '3':
                $resultado = $media AND $soma;
                echo $resultado;
                break;

            case '4':

                break;

            case '5':
                break;

            case '0':
                exit();
                break;
        }

        print_r($resultado);


    }



function Soma(array $numeros){
        $soma = 0;
        for ($i= 0; $i < count ($numeros); $i++){
        $soma = $soma + $numeros[$i];
        }
        return $soma;
    }



    function media(array $numeros){
        $media = 0;
        for ($i = 0; $i < count($numeros); $i++) {
            $media = ($media + $numeros[$i]) / $numeros;
        }
        return $media;
    }









