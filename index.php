
<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichaje de Empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fichaje de Empleados</h1>
        <form action="process.php" method="post">
            <label for="nombre">Nombre del Empleado:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="tipo">Tipo de Fichaje:</label>
            <select id="tipo" name="tipo" required>
                <option value="entrada">Entrada</option>
                <option value="salida">Salida</option>
            </select>
            
            <button type="submit">Fichar</button>
        </form>
    </div>
</body>
</html>