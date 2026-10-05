<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Modifica el ejercicio anterior y añádele algún h1 y párrafos explicativos a la página, fuera
del código PHP, explicando lo que se va a hacer. Por ejemplo, que te quede algo así: Al
final debe quedarte algo como esto:</h3>
    <?php
        
        echo "<h4>ESTA LISTA VA DEL 1 AL 100 DE FORMA ASCENDENTE</h4><br>";
        for($n1=1;$n1<101;$n1++){
            if($n1!=100){
                echo $n1 . ",";
            }else{
                echo "$n1<br><br>";
            }
        }
        echo "<h4>ESTA LISTA VA DEL 10 AL 0 DE FORMA DESCENDIENTE</h4><br>";
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