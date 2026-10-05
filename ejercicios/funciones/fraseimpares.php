<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.</h3>
    <?php
        function impares(string $s) : string {
            $resultado = "";
            for($i=0;$i<strlen($s);$i++){
                if($i%2!=0){
                    resultado.=$s[$i];
                }
            }
            return $resultado;
        }
    ?>
</body>
</html>