<?php
include 'conexao.php';

$query = "SELECT * FROM alunos";
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lista de Alunos</title>
</head>
<body>
  <h1>Lista de Alunos</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
    <?php while ($aluno = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $aluno['id']; ?></td>
        <td><?php echo $aluno['nome']; ?></td>
        <td><?php echo $aluno['email']; ?></td>
        <td><?php echo $aluno['telefone']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
