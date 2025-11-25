<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 200px;
            margin: auto;
            margin-top: 200px;
        }

        input {
            padding: 8px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    if (!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }

    if (!isset($_GET["username"])) {
        header("Location: login.php");
        exit();
    }

    $_SESSION["username"] = $_GET["username"];
    echo "<p>Bem-vindo, " . htmlspecialchars($_SESSION["username"]) . "!</p>";

    if (isset($_GET["error"])) {
        switch ($_GET["error"]) {
            case "faltando_dados":
                echo "<h2 style='color:red; text-align:center;'>Por favor, preencha todos os campos.</h2>";
                break;
            case "altura_invalida":
                echo "<h2 style='color:red; text-align:center;'>Altura inválida. Por favor, insira um valor positivo.</h2>";
                break;
            case "peso_invalido":
                echo "<h2 style='color:red; text-align:center;'>Peso inválido. Por favor, insira um valor positivo.</h2>";
                break;
            case "dados_invalidos":
                echo "<h2 style='color:red; text-align:center;'>Dados inválidos.</h2>";
                break;
        }
    }
    ?>
    <form action="result.php" method="post">

        <h1>Teste de IMC</h1>

        <input type="number" step="0.1" name="peso"
            placeholder="Insira seu peso">
        <input type="number" step="0.01" name="altura"
            placeholder="Insira sua altura (em metros)">
        <button type="submit">Calcular IMC</button>
    </form>

</body>

</html>