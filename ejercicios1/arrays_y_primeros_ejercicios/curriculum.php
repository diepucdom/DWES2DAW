<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="info_basica.css">
</head>
<body>
    <?php
        $texto_va ="Estudis:  a, b, c, d. Idiomes: a, b, c, d";
        $texto_cast ="Estudios:  a, b, c, d. Idiomas: a, b, c, d";
        $idioma="va"
        $texto = "texto_" . $idioma;
        echo $$texto;
    ?>
</body>
</html>