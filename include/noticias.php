<?php
// Establecer la conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";  // Cambia esto si tu base de datos no está en el mismo servidor
$username = "root";
$password = "";
$dbname = "registros";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar la base de datos para obtener las noticias
$sql = "SELECT id, fecha_creacion, categoria, titulo, encabezado FROM noticias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada noticia
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p><strong>Categoría:</strong> " . $row["categoria"] . "</p>";
        echo "<p><strong>Fecha de Creación:</strong> " . $row["fecha_creacion"] . "</p>";
        echo "<p><strong>Encabezado:</strong> " . $row["encabezado"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron noticias.";
}

// Cerrar la conexión
$conn->close();
?>