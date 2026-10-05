<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h3>Ejercicio 5
Modifica el ejercicio anterior añadiendo una tercera nota $nota3 , y determinando cuál
de las 3 notas es ahora la mayor. Para ello, deberás ayudarte esta vez de la estructura
if..elseif..else.<h3>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        $nota1=7;
        $nota2=9;
        $nota3=7;
        if(($nota1>=$nota2 && $nota1>$nota3 || $nota1==$nota2 && $nota1>=$nota3)){
            echo "La nota mayor es $nota1";
        }elseif($nota2>=$nota1 && $nota2>$nota3 || $nota2=$nota1 && $nota2>=$nota3){
            echo "La nota mayor es $nota2";
        }elseif($nota3>=$nota1 && $nota3>$nota2 || $nota3>$nota1 && $nota3>=$nota2){
            echo "La nota mayor es $nota3";
        }
    ?>
</body>
</html>