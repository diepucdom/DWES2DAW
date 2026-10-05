<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Ejercicio 3: Intenta predecir qué resultado va a sacar por pantalla cada instrucción echo
        de este código PHP. Luego podrás comprobar si estabas en lo cierto poniendo el código
        en una página y probándolo en un navegador.</h3>
    <?php
        $num1 = 3;
        $num2 = 5;
        $num3 = 8;
        $num1 *= 4;
        echo $num1;
        echo $num1 <= $num2;
        echo $num3 > $num1 and $num3 > $num2;
        echo $num3 > $num1 or $num3 > $num2;
        echo $num1 > $num2 xor $num1 > $num3;
        $num3--;
        echo $num3;
        $num3 += $num1;
        echo $num3;
    ?>
</body>
</html>