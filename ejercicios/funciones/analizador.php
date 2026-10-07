<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: analizador.php
A partir de una frase con palabras sólo separadas por espacios, devolver:
• Letras totales y cantidad de palabras
• Una línea por cada palabra indicando su tamaño</h3>
    <?php
        $frase = "Hola soy la antes mencionada frase";
        echo "Numero total de letras: " . strlen($frase)."<br>";
        $palabras = explode(" ",$frase);
        echo "Numero de palabras" . count($palabras) ."<br>";
        foreach($palabras as $palabra){
            echo "La palabra " . $palabra . " tiene " . strlen($palabra) . " letras<br>";
        }
    ?>
</body>
</html>