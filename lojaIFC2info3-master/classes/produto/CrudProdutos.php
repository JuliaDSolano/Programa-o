<?php

require_once __DIR__."/../conexao/Conexao.php";

class CrudProdutos
{

    private $conexao;
    private $produto;

    public function __construct()
    {

        $this->conexao = Conexao::getConexao();
    }

    public function cadastrar( Produto $produto )
    {
        $sql = "INSERT INTO tb_produtos(titulo, preco, categoria) VALUES ('$produto->titulo', $produto->preco, '$produto->categoria')";

        $this->conexao->exec($sql);

    }

    public function buscarProduto( int $codigo )
    {

        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE codigo = $codigo");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        return $produto;

    }

    public function getProdutos()
    {

        $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado; //RETORNARÁ LISTA DE PRODUTOS
    }
}
