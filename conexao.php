<?php
$hostname = 'localhost'; // ou o nome do seu servidor MySQL
$username = 'seu_usuario_mysql';
$password = 'sua_senha_mysql';
$database = 'seu_banco_de_dados';

$conexao = mysqli_connect($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo 'Falha na conexão com o MySQL: ' . mysqli_connect_error();
  exit();
}
?>
