<?php

    menu();

    function geraAposta ($possibilidades, $dezenasSorteadas){

        $sorteados = array();

         for($i = 1; $i <= $dezenasSorteadas; $i++){

             $sorteado = 0;

             do{
                 $repetido = false;
                 $sorteado = rand(1, $possibilidades);
                 for ($j = 0; $j < count($sorteados); $j++){
                     if($sorteado == $sorteados[$j]){
                         $repetido = true;
                     }
                 }
             } while ($repetido == true);

             $sorteados[] = $sorteado;
         }
         sort($sorteados);
         return $sorteados;
    }

    function megaSena(){

        $numeroApostas = 0;
        $numeroDezenas = 0;

        echo "Quantas apostas deseja fazer: ";
        $numeroApostas = trim(fgets(STDIN));

        do {
            echo "Quantas dezenas deseja: ";
            $numeroDezenas = trim(fgets(STDIN));
        } while($numeroDezenas < 6 OR $numeroDezenas >15);

        for($i=0; $i< $numeroApostas; $i++){
            print_r(geraAposta(60, $numeroDezenas));
        }


    }

    function quina(){

        $numeroApostas = 0;
        $numeroDezenas = 0;

        echo "Quantas apostas deseja fazer: ";
        $numeroApostas = trim(fgets(STDIN));

        do {
            echo "Quantas dezenas deseja: ";
            $numeroDezenas = trim(fgets(STDIN));
        } while($numeroDezenas < 6 OR $numeroDezenas >16);

        for($i=0; $i< $numeroApostas; $i++){
            print_r(geraAposta(80, $numeroDezenas));
        }

    }

    function lotomania(){

         $numeroApostas = 0;
         $numeroDezenas = 0;

        echo "Quantas apostas deseja fazer: ";
         $numeroApostas = trim(fgets(STDIN));

         echo "para a lotomania o número mínimo e máximo é 50 ";
       $numeroDezenas = 50;

         for($i=0; $i< $numeroApostas; $i++){
         print_r(geraAposta(100, $numeroDezenas));
        }

    }

    function lotofacil(){

        $numeroApostas = 0;
        $numeroDezenas = 0;

        echo "Quantas apostas deseja fazer: ";
        $numeroApostas = trim(fgets(STDIN));


        do {
            echo "Quantas dezenas deseja: ";
             $numeroDezenas = trim(fgets(STDIN));
        } while($numeroDezenas < 15 OR $numeroDezenas >18);

        for($i=0; $i< $numeroApostas; $i++){
            print_r(geraAposta(25, $numeroDezenas));
        }

    }



    function menu() {

        echo "1-Mega Sena \n";
        echo "2-Quina \n";
        echo "3-Lotomania \n";
        echo "4-Lotofácil \n";
        echo "5-sair do jogo \n";
        echo "Qual jogo voce quer jogar? \n";

        $jogo = fgets(STDIN);

        switch ($jogo) {
        case 1:

            megaSena();
            menu();


            break;

        case 2:

            quina();
            menu();

            break;

        case 3:

            lotomania();
            menu();


            break;

        case 4:
            lotofacil();
            menu();

            break;

        case 5:
            exit();
            break;

            default :
                echo "opcao invalida \n";
                menu();
                break;
    }
}








