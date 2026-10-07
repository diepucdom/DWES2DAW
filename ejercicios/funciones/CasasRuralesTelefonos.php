<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: CasasRuralesTelefonos.php
Crea un programa llamado CasasRuralesTelefonos.php que cargue los datos de este
archivo CSV de casas rurales de la provincia de Castellón.
Queremos quedarnos con el id, localidad, nombre y telefono de las casas rurales que tengan un
teléfono definido, descartando el resto.
El programa debe mostrar por pantalla el listado final procesado, y cuántas casas rurales se
han descartado por tener datos nulos</h3>
    <?php

        $archivo = fopen("casasrurales.csv", "r");

        $descartadas = 0;

        $cabecera = fgetcsv($archivo, 0, ";");

        while (($datos = fgetcsv($archivo, 0, ";")) !== false) {

            $id = $datos[0];
            $localidad = $datos[1];
            $nombre = $datos[3];
            $telefono = $datos[9];

            if ($telefono == null || trim($telefono) == "") {
                $descartadas++;
            } else {
                echo "ID: $id | Localidad: $localidad | Nombre: $nombre | Teléfono: $telefono<br>";
            }
        }

        fclose($archivo);

        echo "<br>";
        echo "Casas rurales descartadas: $descartadas";

    ?>
</body>
</html>