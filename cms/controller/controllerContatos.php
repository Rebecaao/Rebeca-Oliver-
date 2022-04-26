<?php
function listarContato(){

    
    require_once('model/bd/contato.php');

    $dados = selectAllContato();

    if(!empty($dados))
        return $dados;
    else
        return false;


}
?>