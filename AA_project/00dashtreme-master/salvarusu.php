<?php

//recebem os dados que estão chegando por POST
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//fazendo conexão com o banco de dados
include('banco.php');

//criar sql do insert 
$sql = "insert into tb_usuario values (null,'$usuario', '$email', '$senha')" ;

//realizar o insert
$consulta = $conexao->query($sql);
 
//testarse insert deu certo
if ($consulta == true) {
    header ('Location: register.php?cad=ok');
}else{
    header ('Location: register.php?cad=erro');
}

?>