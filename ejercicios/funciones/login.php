<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="compruebaLogin.php" method="post">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="usuario">

        <br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">

        <br><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>