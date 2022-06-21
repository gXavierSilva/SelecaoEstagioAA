<?php

//recebem os dados que estão chegando por POST
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//fazendo conexão com o banco de dados
include('banco.php');

//criar sql d econsulta
$sql = "select * from tb_usuario where usuario = '$usuario' and senha = '$senha'";

echo $sql;

//realizar consulta

$consulta = $conexao->query($sql);

if ($consulta == true){
    //verifica se encontrou pelo menos uma linha
    if($consulta->num_rows > 0){
        session_start();
        $_SESSION['login'] = 'ok';
        $_SESSION['usuario'] = $usuario;
        //fim da sessão
        header('Location: crud.php');
    }
    else{
            header('Location: login.php?login=erro');
        }
    };
    
//verificar se ele encontrou

//direcionar para a página principal

?>