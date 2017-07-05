<?php



//$array = [ "precoFinal" => 0, 'megaPreco6' => 3.50, '$megaPreco7'=> 24.50 '$megaPreco8' => 98.00//
   // $megaPreco7 = 24.50,
    //$megaPreco8 = 98.00,
    //$megaPreco9 = 294.00,
    //$megaPreco10 = 735.00,
    //$megaPreco11 = 1617.00,
    //$megaPreco12 = 3234.00,
    //$megaPreco13 = 6006.00,
    //$megaPreco14 = 10510.50,
    //$megaPreco15 = 17517.50,

   //]
function menu()
{
    echo "1- Mega Sena\n";
    echo "2- Quina\n";
    echo "3- Lotomania\n";
    echo "4- LotoFacil\n";
    echo "5- Sair \n ";

    echo "Deseja fazer sua aposta em qual dos jogos? \n";
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {

        case 1:            //mega sena

            echo "quantos numeros voce deseja gerar? \n ";
            $quantosNum = trim(fgets(STDIN));


            if ($quantosNum >= 6 AND $quantosNum <= 15) {

                $numerosSorteados = array();

                for ($i = 0; $i < $quantosNum; $i++) {

                    do {
                        $repetido = false;
                        $sorteado = rand(1, 60);

                        for ($z = 0; $z < count($numerosSorteados); $z++) {
                            if ($sorteado == $numerosSorteados[$z]) {

                                $repetido = true;
                            }
                        }

                    } while ($repetido == true);

                    $numerosSorteados[] = $sorteado;

                }

                sort($numerosSorteados);
                print_r($numerosSorteados);

            } else {
                echo "\n";
                echo "comando invalido  ";
                echo "\n";
                die(); //o codigo termina por aqui.
            }

            menu();
            break;



        case 2:         //quina

            echo "quantos numeros voce deseja gerar? \n ";
            $quantosNum = trim(fgets(STDIN));


            if ($quantosNum >= 5 AND $quantosNum <= 15) {

                $numerosSorteados = array();

                for ($i = 0; $i < $quantosNum; $i++) {

                    do {
                        $repetido = false;
                        $sorteado = rand(1, 80);

                        for ($z = 0; $z < count($numerosSorteados); $z++) {
                            if ($sorteado == $numerosSorteados[$z]) {

                                $repetido = true;
                            }
                        }

                    } while ($repetido == true);

                    $numerosSorteados[] = $sorteado;

                }


                sort($numerosSorteados);
                print_r($numerosSorteados);


            } else {
                echo "\n";
                echo "comando invalido  ";
                echo "\n";
                die(); //o codigo termina por aqui.
            }

            menu();
            break;

        case 3:             //lotomania

            echo "quantos numeros voce deseja gerar? \n ";
            $quantosNum = trim(fgets(STDIN));

            if ($quantosNum >= 5 AND $quantosNum <= 15) {

                $numerosSorteados = array();

                for ($i = 0; $i < $quantosNum; $i++) {

                    do {
                        $repetido = false;
                        $sorteado = rand(1, 80);

                        for ($z = 0; $z < count($numerosSorteados); $z++) {
                            if ($sorteado == $numerosSorteados[$z]) {

                                $repetido = true;
                            }
                        }

                    } while ($repetido == true);

                    $numerosSorteados[] = $sorteado;

                }


                sort($numerosSorteados);
                print_r($numerosSorteados);


            } else {
                echo "\n";
                echo "comando invalido  ";
                echo "\n";
                die(); //o codigo termina por aqui.
            }


            menu();
            break;

        case 4:             //lotofacil

            echo "quantos numeros voce deseja gerar? \n ";
            $quantosNum = trim(fgets(STDIN));

            if ($quantosNum >= 15 AND $quantosNum <= 18) {

                $numerosSorteados = array();

                for ($i = 0; $i < $quantosNum; $i++) {

                    do {
                        $repetido = false;
                        $sorteado = rand(1, 25);

                        for ($z = 0; $z < count($numerosSorteados); $z++) {
                            if ($sorteado == $numerosSorteados[$z]) {

                                $repetido = true;
                            }
                        }

                    } while ($repetido == true);

                    $numerosSorteados[] = $sorteado;

                }


                sort($numerosSorteados);
                print_r($numerosSorteados);


            } else {
                echo "\n";
                echo "comando invalido  ";
                echo "\n";
                die(); //o codigo termina por aqui.
            }

            menu();
            break;

        case 5:

            echo "Obrigada, volte sempre!!";
            exit();
            break;


        default:

            echo "Essa opção nao existe, tente outra vez";
            menu();
            break;


    function preco()
    {
        switch ($valores) {

        echo "Deseja fazer quantas aposta? \n";
        $valores = trim(fgets(STDIN));

            case 6:
                echo "Você vai gastar 3,50 por cada aposta";
                break;

            case 7:
                echo "Você vai gastar 24,50 por cada aposta ";
                break;

            case 8 :
                echo "Você vai gastar 98,00 por cada aposta ";
                break;

            case 9:
                echo "Você vai gastar 294,00 por cada aposta ";
                break;

            case 10:
                echo "Você vai gastar 735,00 por cada aposta ";
                break;

            case 11:
                echo "Você vai gastar 1.617,00 por cada aposta ";
                break;

            case 12:
                echo "Você vai gastar 3.234,00 por cada aposta ";
                break;

            case 13:
                echo "Você vai gastar 6.006,00 por cada aposta ";
                break;

            case 14:
                echo "Você vai gastar 10.510,50 por cada aposta ";
                break;

            case 15:
                echo "Você vai gastar  17.517,50 por cada aposta ";
                break;

            default:
                echo "Informe um número válido... ";
                megaSena();
                break;
        }

    }
}

preco();
menu();



