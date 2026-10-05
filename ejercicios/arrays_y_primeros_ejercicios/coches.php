<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Crea una página llamada coches.php. Define dentro un array bidimensional mixto donde:
La primera dimensión sea asociativa. Aquí pondremos matrículas de coches. La segunda dimensión
será numérica. En cada casilla guardaremos la marca, modelo y número de puertas del coche en
cuestión. Por ejemplo, el coche con matrícula “111BCD” puede ser un “Ford” (casilla 0), modelo “Fo-
cus” (casilla 1) de 5 puertas (casilla 2). Rellena el array con al menos 3 o 4 coches, y después utiliza las
estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula</h3>
    <?php
        $matriculas = array("111BCD"=>array("Ford", "Focus", 5), "222BCD"=>array("marca2", "modelo2", 5), "333BCD"=>array("marca3", "modelo3", 5));
        ksort($matriculas);
        echo "<table>";
        foreach($matriculas as $matricula => $datos){
            echo "<tr>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $datos[0] . "</td>";
            echo "<td>" . $datos[1] . "</td>";
            echo "<td>" . $datos[2] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>