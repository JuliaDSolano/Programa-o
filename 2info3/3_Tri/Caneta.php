<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 18/10/17
 * Time: 11:07
 */
class Caneta
{

    public $cor;
    public $modelo;
    public $carga;
    public $tampada;

    public function escrever(string $texto){

        if ($this->carga > 0){
            echo "$texto";
            $this->carga -= 0.1;
        }else{
            echo "Acabou a tinta";
        }

    }

    public function tampar(){

    }

    public function destampar(){

    }

}