<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: parametrosVariables.php
Crea las siguientes funciones:
Una función que devuelva el mayor de todos los números recibidos como parámetro variables:
function mayor(): int. Utiliza las funciones func_get_args(), etc…
No puedes usar la función max().</h3>
    <?php
        function mayor(): int{
            $args = func_get_args();
            $mayor = $args[0];
            foreach($args as $num){
                if($num > $mayor){
                    $mayor = $num;
                }
            }
            return $mayor;
        }
    ?>
</body>
</html>