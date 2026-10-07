<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: aanalizadorWC.php
Investiga que hace la función str_word_count, y vuelve a hacer el ejercicio</h3>
     <?php
        $frase = "Hola soy la antes mencionada frase";
        echo "Numero total de letras: " . strlen($frase)."<br>";
        $palabras = explode(" ",$frase);
        echo "Numero de palabras" . str_word_count($frase) ."<br>";
        foreach($palabras as $palabra){
            echo "La palabra " . $palabra . " tiene " . strlen($palabra) . " letras<br>";
        }
    ?>
</html>