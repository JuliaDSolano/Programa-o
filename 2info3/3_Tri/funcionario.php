<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/09/17
 * Time: 10:27
 */
    class funcionario{

        public $nome;
        public $departamento;
        public $salario = 0;
        public $dataEntrada;
        public $CPF;
        const SALARIO_E_DECIMO = 13; //const uma vez que foi definida, não pode ser mudada
        const FERIAS = 0.3;

        public function recebeAumento(float $aumento){

        $this->salario += $aumento;
    }
        public function calculaGanhoAnual():float {

        return ($this->salario * SALARIO_E_DECIMO) + $this->salario * FERIAS;
    }
        public function mostra(){

            //TODO fazer o método mostra como pede o exercício
        }
}