<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 15/03/17
 * Time: 09:56
 */
 $herois =  array( );

 for ($i = 0; $i < 5; $i++){
     echo "Escolha um heroi: ";
     $herois[$i] = fgets(STDIN);
 }
//$numeroDeHerois = count ($herois);

 //for ($i = 0; $i <$numeroDeHerois; $i++){
  //   $posicao = $i + 1;
  //  echo "$posicao º lugar: $herois[$i]";
 foreach ($herois as $indice => $heroi){
     echo $indice+1, " lugar: $heroi";
 }