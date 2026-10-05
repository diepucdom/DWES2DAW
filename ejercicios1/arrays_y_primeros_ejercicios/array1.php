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
        $array1 = array();
        for($i=1;$i<=50;$i++){
            $array1[] = rand(0,99);
        }
        echo "desordenado: <ul>";
        foreach($array1 as $num){
            echo "<li>$num</li>";
        }

        echo "</ul> <br> Ordenado: <ul>";
        sort($array1);
        foreach($array1 as $num){
            echo "<li>$num</li>";
        }
        echo "</ul>";

        echo "Mayor: " . max($array1) . "<br>";
        echo "Menor: " . min($array1) . "<br>";
        echo "Promedio: " . array_sum($array1)/count($array1);
    ?>
</body>
</html>