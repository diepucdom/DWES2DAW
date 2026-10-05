<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Añade las siguientes funciones:
• digitos(int $num): int → devuelve la cantidad de dígitos de un número.
• digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando
por la izquierda, la posición $pos.
• quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha)
$cant dígitos.
• quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda)
$cant dígitos.</h3>
    <?php
        function digitos(int $num): int{
            return strlen($num);
        }
        function digitoN(int $num, int $pos): int{
            return (int)strval($num)[$pos];
        }
        function quitaPorDetras(int $num, int $cant): int{
            return intdiv($num, pow(10, $cant));
        }
        function quitaPorDelante(int $num, int $cant): int{
            return (int)substr(strval($num), $cant);
        }
    ?>
</body>
</html>