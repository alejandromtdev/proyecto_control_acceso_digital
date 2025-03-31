
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fichaje"; //nombre base de datos 

// Creamos conexion 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica errores conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>