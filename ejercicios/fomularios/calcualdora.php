
<?php
$x = $_GET["x"];
$y = $_GET["y"];

$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;

if ($y != 0) {
    $division = $x / $y;
} else {
    $division = "No se puede dividir entre 0";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<h1>Calculadora</h1>

<h2>Datos recibidos</h2>
<pre><?php print_r($_GET); ?></pre>

<h2>Operaciones</h2>
<p>Suma: <?php echo $suma; ?></p>
<p>Resta: <?php echo $resta; ?></p>
<p>Multiplicación: <?php echo $multiplicacion; ?></p>
<p>División: <?php echo $division; ?></p>

<h2>Variables del servidor</h2>
<pre><?php print_r($_SERVER); ?></pre>

<p>Ordenador que hace la petición:
<?php echo $_SERVER["REMOTE_ADDR"]; ?></p>

<p>Variable de los parámetros: $_GET</p>

<p>Ruta del sitio web:
<?php echo $_SERVER["DOCUMENT_ROOT"]; ?></p>

</body>
</html>
