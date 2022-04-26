<?php 

require_once('conexaoMysql.php');

function selectAllContato(){

    //Abre conexão com  BD
    $conexao = conexaoMysql();

    //script para listar todos os dados do BD
    $sql = "select * from tblcontatos order by id_contato desc";
    //Executa o script sql no BD e guarda o retorno dos dados, se houver
    $result = mysqli_query($conexao, $sql);

    //Valida se o BD retornou registros
    if($result)
    {
        //mysqli_fetch_assoc() - permite converter os dados para o BD em um array para manipulação do PHP
        //Nesta repetição estamos convertendo os dados do BD em um array ($rsDados), além de
        //o próprio while conseguir gerenciar a quantidade de vezes que deverá ser feita a reperição
        $cont = 0;
        while($rsDados = mysqli_fetch_assoc($result)){
            
            //Cria um array com os dados do BD
            $arrayDados[$cont] = array(
                "id"        => $rsDados['id_contatos'],
                "nome"      => $rsDados['nome'],
                "email"     => $rsDados['email'],
                "obs"       => $rsDados['obs']
            );
            $cont++;
        }
        //Solicita o fechamento da conexao com o BD
        fecharConexaoMysql($conexao);

        return $arrayDados;
    }

    
}


?>