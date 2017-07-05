<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/17
 * Time: 13:14
 */
function palindroma(array $x){
    for ($i = count($x)-1; $i >= 0; $i--){
        $y[] = $x[$i];
    }
    if($y == $x)
        return true;
  }else{
    return false;
}
}