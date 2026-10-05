<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: comprueba_hora.php (Separar la lógica de la vista)
Crea una variable de texto con una hora en ella (por ejemplo, “21:30:12”), y luego procésala
para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida.
Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo,
porque 63 no es un minuto válido.</h3>
    <?php
        $hora = "21:30:12";
        $partes = explode(":", $hora);
        if($partes[0] >= 0 && $partes[0] <= 23 && $partes[1] >= 0 && $partes[1] <= 59 && $partes[2] >= 0 && $partes[2] <= 59){
            echo "La hora es válida";
        }else{
            echo "La hora no es válida";
        }
    ?>
</body>
</html>