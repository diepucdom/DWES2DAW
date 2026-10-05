<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        $usuarios = array(
        "juan" => "1234",
        "pepe" => "5678",
        "ana" => "abcd"
        );

        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        if (!isset($usuarios[$usuario])) {
            echo "Usuario no encontrado";
            include "ko.php";
        } else if ($usuarios[$usuario] != $password) {
            echo "Contraseña incorrecta";
            include "ko.php";
        } else {
            echo "Bienvenido, $usuario";
            include "ok.php";

        }
    ?>
</body>
</html>