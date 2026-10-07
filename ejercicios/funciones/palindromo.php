<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: palindromo.php
Escribe una función que devuelva un booleano indicando si una palabra es palíndroma (se lee
igual de izquierda a derecha que de derecha a izquierda, por ejemplo, "ligar es ser agil
")</h3>
    <?php
        function esPalindromo(string $p): bool {
            $inversa = strrev($p);
            if($p===$inversa){
                return true;
            }else{
                return false;
            }
        }
    ?>
</body>
</html>