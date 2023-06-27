<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$query = "INSERT INTO alunos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {
  echo 'Aluno cadastrado com sucesso!';
} else {
  echo 'Erro ao cadastrar aluno: ' . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
