<?php

    function cadastrar(){

        //controlador agenda

        $contatosAuxiliar = file_get_contents('contatos.json');
        $contatosAuxiliar = json_decode($contatosAuxiliar, true);

        $contato = [
            'id'=> uniqid(), //deixar unico
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'telefone'=>$_POST['telefone']
        ];

        array_push($contatosAuxiliar, $contato);

        $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);

        file_put_contents('contatos.json',$contatosJson);

        header('Location: index.phtml');

    }

    function pegarContatos(){
        $contatosAuxiliar = file_get_contents('contatos.json');
        $contatosAuxiliar = json_decode($contatosAuxiliar, true);

        return $contatosAuxiliar;
    }


    function excluirContato($id){

        $contatosAuxiliar = file_get_contents('contatos.json');
        $contatosAuxiliar = json_decode($contatosAuxiliar, true);


        foreach ($contatosAuxiliar as $posicao => $contato) { //iteração
            if ($id == $contato['id']) {
                unset($contatosAuxiliar[$posicao]);
            }
        }

        $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);
        file_put_contents('contatos.json', $contatosJson);

        header('Location: index.phtml');
    }

    function editarContato($id){

        $contatosAuxiliar = file_get_contents('contatos.json');
        $contatosAuxiliar = json_decode($contatosAuxiliar, true);

        foreach ($contatosAuxiliar as $contato){ //iteração
            if ($contato['id'] == $id){
                return $contato;
            }
        }

    }

    function salvarContatoEditado($id){
        $contatosAuxiliar = file_get_contents('contatos.json');
        $contatosAuxiliar = json_decode($contatosAuxiliar, true);

        foreach ($contatosAuxiliar as $posição => $contato){ //iteração
            if ($contato['id'] == $id){

                $contatosAuxiliar[$posição]['nome'] = $_POST['nome'];
                $contatosAuxiliar[$posição]['email'] = $_POST['email'];
                $contatosAuxiliar[$posição]['telefone'] = $_POST['telefone'];

                break;
            }
        }

        $contatosJson = json_encode($contatosAuxiliar, JSON_PRETTY_PRINT);

        file_put_contents('contatos.json',$contatosJson); //transforma o arquivo json para um array que o php entende

        header('Location: index.phtml'); //leva para um arquivo


    }

        editarContato('5953b7956ba4c');

    //rotas

        if ($_GET['acao'] == 'cadastrar'){
        cadastrar();
    }elseif ($_GET['acao'] == 'Excluir'){
        excluirContato($_GET['id']);
    }else{
        ($_POST['acao'] == 'Editar');
            editarContato($_POST['id']);
        }



































