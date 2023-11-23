<?php // Establecer la conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";  // Cambia esto si tu base de datos no está en el mismo servidor
$username = "root";
$password = "";
$dbname = "registros";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}; ?>