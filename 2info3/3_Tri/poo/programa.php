<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 30/08/17
 * Time: 07:02
 */

    require_once  "classes/conta.php";
    require_once "classes/cliente.php";

    $totalContas = 0;

    //Objeto cliente
    $cliente = new Cliente();
    $cliente->nome = "Giovanna";
    $cliente->cpf = "3002202120";

    $minhaconta = new Conta();


    $minhaconta->setDono($cliente);
    $minhaconta->deposita(2000);
    $minhaconta->setNumero(50);

    echo $minhaconta->getNumero();
    //echo $minhaconta->getDono()->nome;

    $outraConta = new Conta();

    echo"\n";

    echo Conta::getTotalContas();

   /* var_dump($minhaconta);
    $minhaconta->mostra();

    $conseguiSacar = $minhaconta->sacar(2000);

    if ($conseguiSacar){
        print 'Saque efetuado';
    }else{
        print 'Não foi possível sacar';
    }

    $contaAmigo = new Conta();
    $contaAmigo->dono = "Julia";
    $contaAmigo->setSaldo() = 100;

    $minhaconta->transferePara($contaAmigo, 300);

    var_dump($minhaconta);
    var_dump($contaAmigo); */



