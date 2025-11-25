<!DOCTYPE HTML>
<html lang = "en">
<head
    <meta charset="UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>
</head>
<body>
<h1>Cadastro Usuário</h1>
<form action="processa_cadastro.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <input type="submit" value="cadastrar">
</form>
</body>

</html>
