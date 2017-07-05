<?php
/** atividade avaliativa*/
$numeros = array();
do {
    echo "digite um numero: ";
    $numeros[] = fgets(STDIN);
    echo "deseja continuar s ou n: ";
    $continuar = trim(fgets(STDIN));
} while ($continuar == 's');

/**
 * @param array $nums
 * @return int
 */
function somaArray(array $nums){

    $numElementos = count($nums);
    $soma = 0;

    for ($i=0; $i < $numElementos; $i++){

        $soma = $soma + $nums[$i];

    }

    return $soma;
}

function mediaArray(array $nums){
    return somaArray($nums)/count($nums);
}

function substituirNegativo(array $nums){

    $count = count($nums);
    for  ($i= 0; $i < $count; $i++){
        if ($nums[$i] <= 0){
            $nums[$i] = 0;
        }
    }
    return $nums;
}

function substituirIguais(array $nums){


    

}




function menu(){
    echo "\n\ndigite 1: Imprimir o somatório de seus elementos\n";
    echo "digite 2: Imprimir a média de seus elementos\n";
    echo "digite 3: Imprimir a média e o somatório\n";
    echo "digite 4: Substituir por zero os valores negativos e imprimir a média\n";
    echo "digite 5: Substituir por zero os valores repetidos e imprimir a média e o somatorio\n";
    echo "digite 0 : Sair da aplicação\n";
    $opcao = fgets(STDIN);
    //referencia ao array numeros fora da funcao

    global $numeros;
    switch ($opcao) {
        case 1:
            $soma = somaArray($numeros);
            echo "a soma é $soma";
            menu();
            break;
        case 2:
            $media = mediaArray($numeros);
            echo "a media é $media";
            menu();
            break;
        case 3:
            $soma = somaArray($numeros);
            $media = mediaArray($numeros);
            echo "A soma é $soma e a media é $media";
            menu();
            break;

        case 4:
            $arrayAtualizado = substituirNegativo($numeros);
            $media = mediaArray($arrayAtualizado);
            echo "$media";
            menu();
            break;

        case 5:



    }
}

menu();