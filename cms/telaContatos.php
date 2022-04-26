<?php
require_once('model/bd/conexaoMySql.php');

$conex = conexaoMySql();

?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/telaContato.css">
    <title>CRUD CONTATOS</title>
</head>
<body>
    <div class="dashboard">
            <div class="containner-dashboard">
                <div class="conteudo-cms">
                    <div class="caixa-cms">
                        <div class="cms">
                            <h1>CMS</h1>
                        </div>
                        <div class="nome-projeto">
                            <h3>REBECA OLIVER©</h3>
                        </div>
                    </div>
                    <div class="caixa-gerenciamento">
                        <div class="gerenciamento">
                            <h3>Gerenciamento do conteúdo do Site</h3>
                        </div>
                    </div>
                </div>
                <div class="logo-dashboard">
                    <img src="../img/logo oficial.png" alt="">
                </div>
            </div>
            <div class="menu">
                <div class="containner-menu">
                    <div class="containner-sessoes" class="containner-menu">
                        <div>
                            <img src="../img/produto.png" alt="">
                            <h3 >ADM PRODUTOS</h3>
                        </div>
                        <div>
                            <img src="../img/categoria.png" alt="">
                            <h3>ADM CATEGORIA</h3>
                        </div>
                        <div>
                            <img src="../img/contatos.png" alt="">
                            <h3>ADM CONTATOS</h3>
                        </div>
                        <div>
                            <img src="../img/usuarios.png" alt="">
                            <h3>ADM USUÁRIOS</h3>
                        </div>
                    </div>
                </div>

                <div class="user">
                    <div class="img-user">
                        <img src="../img/avatar-do-usuario.png" alt="">
                    </div>
                    <div class="caixa-user">
                        <div class="bem-vindo">
                            <h2>BEM VINDO </h2>
                        </div>
                        <div class="nome-user">
                            <h3>Lívia</h3>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="sessao">
                <h2 class="titulo-sessao">TITULO DA SESAÃO</h2>
            </div>

            <div class="conteudo-sessao">
            <div id="consultaDeDados">
                <table id="tblConsulta" >
                    <tr>
                        <td id="tblTitulo" colspan="6">
                            <h1> Consulta de Dados.</h1>
                        </td>
                    </tr>
                   
                    <tr id="tblLinhas">
                        <td class="tblColunas destaque"> Nome </td>
                        <td class="tblColunas destaque"> Email </td>
                        <td class="tblColunas destaque"> OBS </td>
                        <td class="tblColunas destaque"> Opções </td>
                    </tr>

                    <?php
                // Import do arquivo da controller para solicitar a listagem dos dados
                    require_once('controller/controllerContatos.php');
                    // Chama a função que vai retornar os dados de contatos
                    $listContato = listarContato();

                    // Estrutura de repetição para retornar ps dados do array e printar na tela
                    foreach ($listContato as $item)
                    {
                ?>
                    <tr id="tblLinhas">
                        <td class="tblColunas registros"><?=$item['nome']?></td>
                        <td class="tblColunas registros"><?=$item['email']?></td>
                        <td class="tblColunas registros"><?=$item['obs']?></td>
                    
                        <td class="tblColunas registros">
                                
                            <img src="./img/usuario-icon.png" alt="Excluir" title="Excluir" class="excluir">
                                
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </table>
    </div>
            </div>
        </div>


</body>
</html>