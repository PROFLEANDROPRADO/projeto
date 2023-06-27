<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar Aluno</title>
</head>
<body>
  <h1>Cadastrar Aluno</h1>
  <form action="salvar_aluno.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" required><br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
