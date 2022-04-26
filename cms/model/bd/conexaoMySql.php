<?php

// Constantes para estabelecer a conexão com BD (local do BD, usuário, senha e database)
const SERVER = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'dbRebecaOliver';

// Abre a conexão com o BD Mysql
function conexaoMySql(){
    // Se a conexão for estabelecida com o BD, iremos ter um array de dados sobre a conexão
    $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

    return $conexao;
}
// Fecha a conexão com o BD Mysql
function fecharConexaoMysql($conexao){
    mysqli_close($conexao);
}

?>