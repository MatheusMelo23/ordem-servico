<?php
include_once "model/Servico.php"; //incluir a model

class ServicoController
{


    //  ~~~~~~~~~~~~~~~~~~~~~ Chamada de páginas ~~~~~~~~~~~~~~~~~~~~
    //Função que irá abrir a página para realizar um novo cadastro de serviço
    public function pagina_Servico()
    {
        include_once "view/novo_servico.php";
    }



    //Função que irá abrir a página para realizar uma consulta dos serviços ativos
    public function pagina_Consulta()
    {
        //coloca a classe em uso
        $ser = new Servico();

        //envia valores do banco de dados para a váriavel $dados_servico (que será usado no view/consulta_servico.php)
        $dados_servico = $ser->consultar();

        //página que irá abrir para realizar as consultas
        include_once "view/consulta_servico.php";
    }


    public function pagina_Consulta_Geral()
    {
        //coloca a classe em uso
        $ser = new Servico();

        //envia valores do banco de dados para a váriavel $dados_servico (que será usado no view/consulta_servico.php)
        $dados_servico = $ser->consultar_Geral();

        //página que irá abrir para realizar as consultas
        include_once "view/consulta_todos_servicos.php";
    }


    //Função que irá abrir a página para realizar alterações no serviços ativos
    public function pagina_Editar($cod)  //enviar o $cod para o banco de dados saber qual nós queremos 
    {

        //coloca a classe em uso
        $ser = new Servico();

        //Envia a primary key (cod_servico) para o banco de dados
        $ser->cod_servico = $cod;
        $dados_servico = $ser->retornar();

        //página que irá abrir para editar os serviços ativos
        include_once "view/editar_servico.php";
    }



    //  ~~~~~~~~~~~~~~~~~~~~~ Chamada de páginas ~~~~~~~~~~~~~~~~~~~~



    //  ~~~~~~~~~~~~~~~~~~~~~ Chamada de funções que alteram o Banco de Dados ~~~~~~~~~~~~~~~~~~~~




    //Função que irá cadasrtar o novo serviço no banco de dados
    public function cadastrar_Servico()
    {
        //coloca a classe em uso
        $ser = new Servico();

        //enviar valores do formulário para a classe
        $ser->nome_cliente      = $_POST["nome_cliente"];
        $ser->data_pedido       = $_POST["data_pedido"];
        $ser->data_entrega      = $_POST["data_entrega"];
        $ser->valor_servico     = $_POST["valor_servico"];
        $ser->descricao_servico = $_POST["descricao_servico"];
        $ser->status_servico    = 1;

        //executa método cadastrar que está no model/Servico.php
        $ser->cadastrar();

        //enviar uma mensagem de confirmação
        echo "<script>
                    alert('Dados gravados com sucesso!');
                    window.location='" . URL . "home';
                </script>";
    }



    //Função que irá editar o Serviço ativo selecionado na página anterior (view/editar_servico.php)
    public function editar_Servico()
    {

        //coloca a classe em uso
        $ser = new Servico();

        //envia valores do formulário para a classe
        $ser->cod_servico       = $_POST["cod_servico"];
        $ser->nome_cliente      = $_POST["nome_cliente"];
        $ser->data_pedido       = $_POST["data_pedido"];
        $ser->data_entrega      = $_POST["data_entrega"];
        $ser->valor_servico     = $_POST["valor_servico"];
        $ser->descricao_servico = $_POST["descricao_servico"];
        $ser->status_servico    = 1;

        //executa método editar que está no model/Servico.php
        $ser->editar();

        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location='" . URL . "consulta-servico';
            </script>";
    }




    //Função que irá "excluir" do banco de dados o serviço ativo (explicado melhor no readme.txt)
    public function excluir_Servico($cod)
    {

        //coloca a classe em uso
        $ser = new Servico();

        // realiza a alteração no status_servico de 1 para 0
        $ser->cod_servico = $cod;
        $ser->status_servico = 0;
        $ser->excluir();
        echo "<script>
        alert('Serviço excluido com sucesso!');
        window.location='" . URL . "consulta-servico';
    </script>";
    }




    //Função que REALMENTE PODE EXCLUIR o serviço do banco de dados
    public function realmente_Excluir_Servico($cod)
    {

        //coloca a classe em uso
        $ser = new Servico();

        //Manda o cod_servico para ser excluido no banco de dados
        $ser->cod_servico = $cod;
        $ser->realmente_excluir_servico();
        echo "<script>
        alert('Serviço excluido com sucesso!');
        window.location='" . URL . "consulta-todos-servicos';
    </script>";
    }





    //Função para liberar o extra
    public function secreta()
    {
        $_SESSION['sessao'] = "ativar";
        include_once "home.php";
    }



    //Função para excluir o extra
    public function excluir_Secreta()
    {
        session_destroy();
        header("Location:" . URL . "home");
    }
}
