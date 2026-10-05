<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo [“M”, “M”, “F”,
“M”, …]). Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los
valores almacenando el resultado en un array asociativo [‘M’ => 44, ‘F’ => 66] (no utilices variables
para contar las M o las F). Finalmente, muestra el resultado por pantalla</h3>
    <?php
        $a = array("M","F");
        $arrFinal = array();
        $arrValores = array("M"=>0,"F"=>0);
        for($i=0;$i<100;$i++){
            $numero = rand(0,1);
            $arrFinal[] = $a[$numero];
        }
        foreach($arrFinal as $valor){
            $arrValores[$valor]++;
        }
        echo $arrValores["M"] . " hombres y " . $arrValores["F"] . " mujeres";
    ?>
</body>
</html>