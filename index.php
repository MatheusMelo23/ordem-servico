<?php

session_start(); //sessão para a função secreta

//classes necessárias
include_once "controller/ServicoController.php";



//minha url
define('URL','http://localhost/ordem-servico-matheus/');



//urls que irão ser usadas no sistemas
if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {


        // Rota inicial, home page do site
        case 'home':
            include_once "home.php";
        break;


        // Rota para abrir a página de novo_servico.php
        case 'novo-servico':
            $ser = new ServicoController();
            $ser->pagina_Servico();
            break;

        
        // Rota para abrir a página de consulta_servico.php 
        case 'consulta-servico':
            $ser = new ServicoController();
            $ser->pagina_Consulta();
        break;



        // Rota para abrir a página de consulta_todos_servicos.php 
        case 'consulta-todos-servicos':
        $ser = new ServicoController();
        $ser->pagina_Consulta_Geral();
         break;


        // Rota para abrir a página de editar_servico.php
        case 'editar-servico':
            $ser = new ServicoController();
            $ser->pagina_Editar($url[1]);
        break;


        //~~~~~~~~~~~Rotas que irão realizar alguma alteração


        // Rota para cadastrar um novo serviço e enviar para o banco de dados
        case 'enviar-servico':
            $ser = new ServicoController();
            $ser->cadastrar_Servico();
        break;


        // Rota para enviar a alteração de um serviço já existente para o banco de dados
        case 'envia-servico':
            $ser = new ServicoController();
            $ser->editar_Servico();
        break;

        // Rota para "excluir" o serviço do banco de dados
        case 'excluir-servico':
            $ser = new ServicoController();
            $ser->excluir_Servico($url[1]);
        break;


            
        // Rota para REALMENTE EXCLUIR  o serviço do banco de dados (não aconselhável)
        case 'realmente-excluir-servico':
            $ser = new ServicoController();
            $ser->realmente_Excluir_Servico($url[1]);
        break;
            


        //opção secreta
        case 'opcao-secreta':
            $ser = new ServicoController();
            $ser->secreta();
        break;

        //opção secreta
        case 'excluir-secreta':
            $ser = new ServicoController();
            $ser->excluir_Secreta();
        break;

        
        default:

            include_once "view/not_found.php";
           
        break;

    }

}
