```php
<?php
$nombreape = $_POST['nombreape'];
$email = $_POST['email'];
$url = $_POST['url'];
$sexo = $_POST['sexo'];
$convivientes = $_POST['convivientes'];
$aficiones = $_POST['aficiones'] ?? [];
$menufav = $_POST['menufav'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen del formulario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Resumen de los datos</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Dato</th>
                <th>Valor</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Nombre y apellidos</td>
                <td><?php echo htmlspecialchars($nombreape); ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>

            <tr>
                <td>URL personal</td>
                <td><?php echo htmlspecialchars($url); ?></td>
            </tr>

            <tr>
                <td>Sexo</td>
                <td><?php echo htmlspecialchars($sexo); ?></td>
            </tr>

            <tr>
                <td>Número de convivientes</td>
                <td><?php echo htmlspecialchars($convivientes); ?></td>
            </tr>

            <tr>
                <td>Aficiones</td>
                <td><?php echo htmlspecialchars(implode(", ", $aficiones)); ?></td>
            </tr>

            <tr>
                <td>Menú favorito</td>
                <td><?php echo htmlspecialchars(implode(", ", $menufav)); ?></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
```