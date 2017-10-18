<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/10/17
 * Time: 10:17
 */
abstract class Animal{

    protected $classe;
    protected $especie;
    protected $nomePopular;

    function __construct($classe, $especie, $nomeP){

        $this->classe = $classe;
        $this->especie = $especie;
        $this->nomePopular = $nomeP;
    }

    public abstract function emitirSom();

    public function mostra(){
       echo "Nome popular {$this->nomePopular}";
       echo "Classe {$this->classe}";
       echo "Especie {$this->especie}";
    }
}