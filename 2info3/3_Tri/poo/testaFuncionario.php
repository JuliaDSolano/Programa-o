<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/09/17
 * Time: 09:54
 */

    require_once "classes/Funcionario.php";
    require_once "classes/Data.php";

        $gerente = new Funcionario();
        $gerente->nome = "Alfred Silva ";
        $gerente->departmento = "Vendas ";
        $gerente->salario = 10000;
        $gerente->setDataEntrada($data); //tranformar em classe

        $gerente->mostra();
        echo "\n";

    //--------------------------------------------
        $seguranca = new Funcionario();
        $seguranca->nome = "Nogueira ";
        $seguranca->departmento = "Segurança ";
        $seguranca->salario = 1800;
        $seguranca->dataEntrada = "13/09/2017"; //tranformar em classe

        $seguranca->mostra();

