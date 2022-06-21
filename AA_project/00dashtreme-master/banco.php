<?php
$conexao = new mysqli('localhost', 'root', '', 'db_savier');

//verificando conexão com a base de dados
if (mysqli_connect_errno()) {
trigger_error(mysqli_connect_error());
echo mysqli_connect_error();

}

?>