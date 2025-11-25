<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php

    session_start();
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: login.php?error=invalid_credentials");
        exit();
    }

    if (!isset($_POST["username"]) || !isset($_POST["password"])) {
        header("Location: index.php?error=invalid_credentials");
        exit();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $valid_username = "admin";
    $valid_password = "admin";

    if ($username != $valid_username || $password != $valid_password) {
        header("Location: login.php?error=invalid_credentials");
        exit();
    }

    $_SESSION["username"] = $username;
    header("Location: login.php?success=true");

    ?>

</body>

</html>