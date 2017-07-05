<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 30/03/17
 * Time: 13:26
 */

    $nome = "Araquari";

    function informeCidade(&$nome){

        $nome = "Joinville";

        return $nome;
    }

    informeCidade($nome);
    echo $nome;