<?php

require_once __DIR__."/../../config/config.php";

class Conexao{

    private static $conexao = null;

    public static function getConexao(){

        try{
            if (self::$conexao == null){

                self::$conexao = new PDO("mysql:host=".HOST."; dbname=".BANCO, USUARIO, SENHA);

                //NECESSÁRIO CONFIGURAR UM ATRIBUTO PARA SER INFORMADO DOS ERROS NO SQL

            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$conexao;

            }catch (PDOException $e) {
                echo "Ocorreu um erro {$e->getMessage()} na linha {$e->getLine()}";

            }

        }

    }
