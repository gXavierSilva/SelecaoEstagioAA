<?php

//recebem os dados que estão chegando por POST
$id = $_GET['id'];

//fazendo conexão com o banco de dados
include('banco.php');

//criar sql d econsulta
$sql = "delete from tb_inscritos where cod_ins = '$id'";

//realizar consulta

$consulta = $conexao->query($sql);
//testa se a consulta deu certo
if ($consulta == true){
//testa se a consulta deu certo
        header('Location: crud.php?delete=ok');
    }
    else{
            header('Location: crud.php?delete=erro');
        }
    
//verificar se ele encontrou

//direcionar para a página principal

?>