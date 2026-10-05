<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Ejercicio 4
Crea una página llamada prueba_if.php en la carpeta de ejercicios del tema. Crea en
ella dos variables llamadas $nota1 y $nota2, y dales el valor de dos notas de examen
cualesquiera (con decimales si quieres). Después, utiliza expresiones if..else para deter-
minar qué nota es la mayor de las dos.</h3>
    <?php
        $nota1=7;
        $nota2=9;
        if($nota1>$nota2){
            echo "La nota mayor es $nota1";
        }
        elseif($nota1==$nota2){
            echo "Son iguales";
        }
        else{
            echo "La nota mayor es $nota2";
        }
    ?>
</body>
</html>