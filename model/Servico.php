<?php
class Servico
{
    //atributos da tabela cliente
    public $cod_servico;
    public $nome_cliente;
    public $data_pedido;
    public $data_entrega;
    public $descricao_servico;
    public $status_servico;



    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO servico 
        (
            nome_cliente, 
            data_pedido, 
            data_entrega,
            valor_servico,
            descricao_servico, 
            status_servico
        ) 
        VALUES 
        (
            :nome_cliente, 
            :data_pedido, 
            :data_entrega, 
            :valor_servico,
            :descricao_servico, 
            :status_servico
        )
        ");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nome_cliente",        $this->nome_cliente);
        $cmd->bindParam(":data_pedido",         $this->data_pedido);
        $cmd->bindParam(":data_entrega",        $this->data_entrega);
        $cmd->bindParam(":valor_servico",       $this->valor_servico);
        $cmd->bindParam(":descricao_servico",   $this->descricao_servico);
        $cmd->bindParam(":status_servico",      $this->status_servico);

        $cmd->execute(); //executar o comando
    }


    public function consultar()
    {
        $con = Conexao::conectar(); //acessar o BD
        $cmd = $con->prepare("SELECT * FROM servico WHERE status_servico = 1"); //comando SQL
        $cmd->execute(); //executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }



    public function consultar_Geral()
    {
        $con = Conexao::conectar(); //acessar o BD
        $cmd = $con->prepare("SELECT * FROM servico"); //comando SQL
        $cmd->execute(); //executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function retornar()
    {
        $con = Conexao::conectar(); //acessar o BD
        $cmd = $con->prepare("SELECT * FROM servico
        WHERE cod_servico = :cod_servico"); //comando SQL
        $cmd->bindParam(":cod_servico", $this->cod_servico);
        $cmd->execute(); //executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }



    public function editar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para atualizar (UPODATE)
        $cmd = $con->prepare("UPDATE  servico SET
            nome_cliente        = :nome_cliente,
            data_pedido         = :data_pedido,
            data_entrega        = :data_entrega,
            valor_servico       = :valor_servico,
            descricao_servico   = :descricao_servico,
            status_servico      = :status_servico

        WHERE cod_servico = :cod_servico");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_servico",         $this->cod_servico);
        $cmd->bindParam(":nome_cliente",        $this->nome_cliente);
        $cmd->bindParam(":data_pedido",         $this->data_pedido);
        $cmd->bindParam(":data_entrega",        $this->data_entrega);
        $cmd->bindParam(":valor_servico",       $this->valor_servico);
        $cmd->bindParam(":descricao_servico",   $this->descricao_servico);
        $cmd->bindParam(":status_servico",      $this->status_servico);
        $cmd->execute(); //executar o comando
    }




    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("UPDATE  servico SET 
            status_servico = :status_servico
        WHERE cod_servico = :cod_servico");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_servico",       $this->cod_servico);
        $cmd->bindParam(":status_servico",    $this->status_servico);
        $cmd->execute(); //executar o comando
    }




    public function realmente_excluir_servico()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM servico WHERE cod_servico = :cod_servico");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_servico",       $this->cod_servico);
        $cmd->execute(); //executar o comando
    }
}
