<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea
un array de personas, siendo cada persona un array asociativo: [ [‘nombre’=>‘Aitor’, ‘altura’=>182,
‘email’=>‘aitor@correo.com’],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla
HTML.</h3>

    <?php
        $arrAsociativo =array();
        $arrAsociativo[] = array("nombre"=>"Aitor", "altura"=>182, "email"=>"aitor@correo.com");
        $arrAsociativo[] = array("nombre"=>"María", "altura"=>165, "email"=>"maria@correo.com");
        $arrAsociativo[] = array("nombre"=>"Juan", "altura"=>175, "email"=>"juan@correo.com");
        $arrAsociativo[] = array("nombre"=>"Ana", "altura"=>160, "email"=>"ana@correo.com");
        $arrAsociativo[] = array("nombre"=>"Pedro", "altura"=>180, "email"=>"pedro@correo.com");
        echo "<table">";
        foreach($arrAsociativo as $persona){
            echo "<tr>";
            foreach($persona as $dato){
                echo "<td>$dato</td>";
            }
            echo "</tr>";
        }
    ?>
    
</body>
</html>