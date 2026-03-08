<?php
session_start();

require_once "credencials.php"; // ERROR 2: hauria de ser credencials.php

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? ""; // ERROR 3: hauria de ser "username"
    $password = $_POST["password"] ?? "";

    if (isset($usuaris[$username]) && $usuaris[$username]["password"] === $password) {

        $_SESSION["usuari"] = $username;
        $_SESSION["rol"] = $usuaris[$username]["rol"];

        if ($_SESSION["rol"] === "administrador ") { // ERROR 4: hauria de ser "administrador"
            header("Location: admin.php");
        } else {
            header("Location: meva_pagina.php");
        }
        exit();

    } else {
        $error = "Usuari o contrasenya incorrectes";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="processar.php">
  Usuari: <input type="text" name="username" required><br><br>
  Contrasenya: <input type="password" name="password" required><br><br>
  <button type="submit">Entrar</button>
</form>

<p style="color:red;"><?php echo $error; ?></p>

</body>
</html>
