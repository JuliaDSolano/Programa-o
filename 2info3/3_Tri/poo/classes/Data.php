<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/09/17
 * Time: 10:55
 */
class Data
{
    public $dia;
    public $mes;
    public $ano;
    public function formatada(){
        return     $this->dia."/".$this->mes."/".$this->ano;
    }
}