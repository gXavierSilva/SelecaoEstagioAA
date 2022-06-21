<?php

//recebem os dados que estão chegando por POST
$cod_ins = $_POST['cod_ins'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$contato = $_POST['contato'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$evento = $_POST['evento'];
$pos_evento = $_POST['pos_evento'];

//fazendo conexão com o banco de dados
include('banco.php');

//criar sql do update
$sql = "update tb_inscritos set nome='$nome', cpf='$cpf', email='$email', contato='$contato', cep='$cep', estado='$estado', cidade='$cidade', bairro='$bairro', endereco='$endereco', numero='$numero', complemento='$complemento', evento='$evento', pos_evento='$pos_evento' where cod_ins='$cod_ins'";

//realizar o insert
$consulta = $conexao->query($sql);
 
//testarse insert deu certo
if ($consulta == true) {
    header ('Location: crud.php?alter=ok');
}else{
    header ('Location: crud.php?alter=erro');
}

?>
