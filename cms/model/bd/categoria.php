<?php
/****** 
 * Objetivo: Arquivo responsavel por manipular os dados dentro do banco de dados
 * (insert, update, selec e delete)
 * autor: rebeca
 * data:26/04/2022
 * versao:1.0
******************************************************/

//importando a conexao
require_once('conexaoMySql.php');

//criando funcao para insert na tabela no bd
function insertCategoria($dadosCategoria){

     //abre a conexao com o banco
    $conexao =  conexaoMySql();

    //variavel criada para receber resposta de comandos, retornando true ou false
    $statusResposta = (boolean) false;


    //craindo variavel que vai receber o script do banco
    $sql = "insert into tblcategorias (nome)
     values
    ('".$dadosCategoria['nome']."');";

    //executando script no banco
    if(mysqli_query($sql, $conexao)){

        //verificando se uma linha do bd foi acrescentada na tabela
        if(mysqli_affected_row($conexao)){
            $statusResposta = true;
        }else{
            $statusResposta = false;
        }
    }else{
        $statusResposta = false;
    }

    // solicita o fechamento da conexao 
    fecharConexaoMysql($conexao);
    return $statusResposta;
}

//funcao para selecionar tudo da tabela categoria do bd

function selectAllCategoria(){

    //variavel para guardar a conexao que vem da conexaoMysql que ja foi importada
    $conexao = conexaoMsql();

    //variavel para guardar o script que vai listar a tabela categoria
    $sql = "slect * from tblcategorias"

    
}

?>