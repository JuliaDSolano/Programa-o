<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/09/17
 * Time: 13:28
 */
class Lutador
{
    public $nome;
    public $idade;
    public $invergadura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;

    function __construct($nome, $peso, $vitorias, $derrotas){

        $this->nome = $nome;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;

        $this->setCategoria();

    }

    public function setPeso(float $novoPeso){
        $this->peso = $novoPeso;
        $this->setCategoria();
    }

    public function getPeso(){
        return $this->peso;
    }

    public function ganhaLuta(){
        $this->vitorias++;
    }
    public function perdeLuta(){
        $this->derrotas++;
    }

    public function apresenta(){
        echo "Ladies and Gentlemen, com {$this->vitorias} vitórias e {$this->derrotas} derrotas, pesando {$this->peso} kilos, na categoria {$this->categoria}... {$this->nome}\n\n";

    }

    private function setCategoria(){
       if ($this->peso <= 50){
           $this->categoria = "Mosca";

        }elseif ($this->peso <= 70){
           $this->categoria = "Bode";
       }else{
            $this->categoria = "Snorlax";
       }
    }
}

//-------------------------------------------------

$saitama = new Lutador("Saitama Sannnnnn", 70, 120, 0);

$saitama->ganhaLuta();
$saitama->ganhaLuta();
$saitama->ganhaLuta();

$saitama->perdeLuta();

$saitama->apresenta();

