<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/17
 * Time: 13:13
 */

function palindroma($palavra){

    if($palavra == strrev($palavra)){
        return true;

    }else{
       return false;
    }

}
$palavra = trim(fgets(STDIN)); //variavel onde o usuario determina a palavra, senao seria, por exemplo, $palavra = "ata";
$resultado = palindroma($palavra);

    if ($resultado){
        echo "$palavra é palindroma";

    }else{

        echo"$palavra não é palindroma";
}