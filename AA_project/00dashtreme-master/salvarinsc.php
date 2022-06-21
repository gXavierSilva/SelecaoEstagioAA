<?php

//recebem os dados que estão chegando por POST
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

//criar sql do insert 
$valid = "select * from tb_inscritos where cpf='$cpf'";
//realizar o insert
$consulta2 = $conexao->query($valid);
//testarse insert deu certo
if($consulta2 == true){
    if($consulta2 !== false && $consulta2->num_rows > 0){
        header ('Location: inscricao.php?cad=non');
    }else{
        $sql = "insert into tb_inscritos values (null,'$nome', '$cpf', '$email', '$contato', '$cep', '$estado', '$cidade', '$bairro', '$endereco', '$numero', '$complemento', '$evento', '$pos_evento')" ;
        $consulta1 = $conexao->query($sql);
        if($consulta1 == true){
            header ('Location: inscricao.php?cad=ok');
        }
    }
}

?>