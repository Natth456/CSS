<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: index.php?error=faltando_dados");
        exit();
    }

    if (!isset($_POST["peso"]) || !isset($_POST["altura"])) {
        header("Location: index.php?error=faltando_dados");
        exit();
    }

    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    if (!is_numeric($peso) || !is_numeric($altura)) {
        header("Location: index.php?error=dados_invalidos");
        exit();
    }

    print"". $peso ."". $altura ."";

    if ($altura <= 0) {
        header("Location: index.php?error=altura_invalida");
        exit();
    }

    if ($peso <= 0) {
        header("Location: index.php?error=peso_invalido");
        exit();
    }

    $imc = $peso / ($altura * $altura);
    echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";

    if ($imc < 18.5) {
        echo "<p>Classificação: Abaixo do peso</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Classificação: Peso normal</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Classificação: Sobrepeso</p>";
    } else {
        echo "<p>Classificação: Obesidade</p>";
    }
    ?>

</body>

</html>