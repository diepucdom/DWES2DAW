<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Ejercicio 2:
Crea una página llamada intercambia.php. Añade dentro una función llamada inter-
cambia que reciba 2 parámetros numéricos por referencia, y lo que haga sea intercam-
biar sus valores. Es decir, si recibe el parámetro $a y el valor de $b , y $b tome el valor
de $a.</h3>
    <?php
        function intercambiar($a, $b){
            $aTemporal = $a;
            $a =$b;
            $b = $aTemporal;
        }
        echo "El valor de a es: " . $a . "<br>";
        echo "El valor de b es: " . $b . "<br>";
    ?>
</body>
</html>