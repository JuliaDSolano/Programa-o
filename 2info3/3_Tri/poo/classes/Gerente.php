<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/10/17
 * Time: 10:39
 */

require_once "Funcionario.php";

class Gerente extends Funcionario {

    public $senhaCofre;
    public $numeroFuncionariosGerenciados;

    public function autentica(int $senha){

        if ($this->senhaCofre == $senha){
            echo "Acesso permitido";
        }else {
            echo "Acesso negado";
        }
    }
    public function recebeAumento(float $aumento){
        $this->salario += $aumento + 100;
    }


    public function mostra(){

        parent::mostra();
        echo "\n Numero de funcionarios gerenciados:{$this-> numeroFuncionariosGerenciados}";

    }
}
 //

require_once "Data.php";
$jarbas = new Gerente();
$jarbas->numeroFuncionariosGerenciados = 2;

$data = new Data();
$data->dia = 05;
$data->mes = 10;
$data->ano = 2017;