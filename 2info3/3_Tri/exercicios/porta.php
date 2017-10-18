<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/09/17
 * Time: 11:02
 */
class porta
{
    public $aberta;
    public $cor;
    public $espessura;
    public $comprimento;
    public $altura;

    public function abre(){
        $this->aberta = true;
    }

    public function fecha(){
        $this->aberta = false;
    }

    public function pinta(string $corPintura){
        $this->cor = $corPintura;
    }

    public function estaAberta():bool {
        return $this->aberta;
    }

}
$portaA = new porta();
$portaA-> aberta = false;
$portaA->espessura = 0.3;
$portaA->comprimento = 2.2;
$portaA->altura = 3.0;


$portaA->pinta("Vinho");
$portaA->abre();

echo "A porta é da cor {$portaA->cor} e está ";


if ($portaA->aberta == true){
    echo "aberta";
}else{
    echo "fechada";
}
