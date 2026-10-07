<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h3>ENUNCIADO: cani.php
EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.</h3>
    <?php
        $frase = "Hola mundo";
        function canificador(string $s) : string {
            $out="";
            for($i=0;$i<strlen($s);$i++){
                if(i%2==0){
                    $out.=strtoupper($s[$i]);
                }else{
                    $out.=strtolower($s[$i]);
                }
            }
            return $out;
        }
        echo "NORMAL" . $frase;
        echo "CANIFICADA: " . canificador($frase);
    ?>
</body>
</html>