<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 22/03/17
 * Time: 10:08
 */

//get = buscar
//getNome(){
//set = informar ou cadastrar

//variavel $nome está no escopo local
/**
 * @param string $nome
 * @param int $idade
 */
  //  function digaOla(string $nome, int $idade){
    //    echo "Olá $nome" . "\n";
    /*    echo "Sua idade é $idade";
    }


    digaOla("Jefferson", 14);*/

    function adicionarValor(array &$numeros, $valor){ // & = conhece o endereço da variavel $numeros

        array_push($numeros, $valor); //array_push = ordenar
    }

    $numeros = [2,4,6];
    adicionarValor($numeros, 8);
    print_r($numeros);