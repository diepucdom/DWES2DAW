<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREA CIRCULO</title>
    <link rel="stylesheet" type="text/css" href="areacirculo.css">
</head>
<body>
    <?php
        define("PI", 3.1416);
        $radio =3.5;
        $area = PI *$radio**2;

        echo "<h3>ÁREA:" . $area . "</h3> <br> <h3>RADIO:" .$radio."</h3><br>El área del círculo es: a * r² = " . $area;
    ?>
</body>
</html>