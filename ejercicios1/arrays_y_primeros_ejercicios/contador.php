<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>Ejercicio 6
Crea una página llamada contador.php en la carpeta de ejercicios del tema. Utiliza una
estructura for para contar los números del 1 al 100 (separados por comas), y luego una
estructura while para contar los números del 10 al 0 (una cuenta atrás, separada por
guiones).
Al final debe quedarte algo como esto:
1,2,3,4,5,6,7,8,9,10,11,12,13,14,15…
10-9-8-7-6-5-4-3-2-1-0</h3>
    <?php
        echo "<h4>LISTA 1</h4><br>";
        for($n1=1;$n1<101;$n1++){
            if($n1!=100){
                echo $n1 . ",";
            }else{
                echo "$n1<br><br>";
            }
        }
        echo "<h4>LISTA 2</h4><br>";
        for($n2=10;$n2>=0;$n2--){
            if($n2!=0){
                echo $n2 . "-";
            }else{
                echo $n2;
            }
        }
    ?>
</body>
</html>