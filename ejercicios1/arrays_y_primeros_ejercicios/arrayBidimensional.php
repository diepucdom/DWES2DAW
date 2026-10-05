<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilosbidimensional.css">
</head>
<body>
    <h3>ENUNCIADO: Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre
100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir
ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que:
• La columna del máximo debe aparecer en azul.
• La fila del mínimo debe aparecer en verde.
• El resto de números deben aparecer en negro.</h3>
    <?php
        $arr = array();

        for ($i = 0; $i < 6; $i++) {
            $arr[$i] = array();
        }

        foreach ($arr as &$elemento) {
            for ($i = 0; $i < 9; $i++) {
                do {
                    $numero = rand(100, 999);
                } while (in_array($numero, $elemento));

                $elemento[] = $numero;
            }
        }
        //ENCONTRAR MAX-MIN
$max = 0;
$min = 999;
$colMax = 0;
$filaMin = 0;

foreach ($arr as $fila => $elementoSurface) {
    foreach ($elementoSurface as $columna => $elemento) {

        if ($max <= $elemento) {
            $max = $elemento;
            $colMax = $columna;
        }

        if ($min >= $elemento) {
            $min = $elemento;
            $filaMin = $fila;
        }
    }
}

//TABLA
echo "<table>";

foreach ($arr as $fila => $elementoSurface) {
    echo "<tr>";

    foreach ($elementoSurface as $columna => $elemento) {

        if ($columna == $colMax) {
            echo "<td class='azul'>$elemento</td>";
        } elseif ($fila == $filaMin) {
            echo "<td class='verde'>$elemento</td>";
        } else {
            echo "<td>$elemento</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";
    ?>
    
</body>
</html>