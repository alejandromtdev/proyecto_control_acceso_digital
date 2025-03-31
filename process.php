
<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $fecha_hora = date('Y-m-d H:i:s');  //fecha servidor

    $sql = "INSERT INTO registros (nombre_empleado, tipo, fecha_hora) VALUES ('$nombre', '$tipo', '$fecha_hora')";

    if ($conn->query($sql) === TRUE) {
        echo "Fichaje registrado correctamente.";  //Hora confirmacion
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>