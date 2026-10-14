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
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">Resumen del formulario</h2>
        </div>

        <div class="card-body p-4">

            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Dato</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Nombre y apellidos</th>
                        <td><?php echo htmlspecialchars($nombreape); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo htmlspecialchars($email); ?></td>
                    </tr>
                    <tr>
                        <th>URL personal</th>
                        <td><?php echo htmlspecialchars($url); ?></td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td><?php echo htmlspecialchars($sexo); ?></td>
                    </tr>
                    <tr>
                        <th>Número de convivientes</th>
                        <td><?php echo htmlspecialchars($convivientes); ?></td>
                    </tr>
                    <tr>
                        <th>Aficiones</th>
                        <td><?php echo htmlspecialchars(implode(", ", $aficiones)); ?></td>
                    </tr>
                    <tr>
                        <th>Menú favorito</th>
                        <td><?php echo htmlspecialchars(implode(", ", $menufav)); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="text-center">
                <a href="formulario.html" class="btn btn-primary">Volver al formulario</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
```