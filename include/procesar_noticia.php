<?php
// Procesar el formulario y guardar la noticia en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fecha = $_POST["fecha"];
    $categoria = $_POST["categoria"];
    $titulo = $_POST["titulo"];
    $encabezado = $_POST["encabezado"];

    $imagen_nombre = $_FILES["imagen"]["name"];
    $ruta_destino = __DIR__ . "/img/" . $imagen_nombre;


if (file_exists($ruta_destino)) {
    echo "El archivo ya existe.";
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_destino)) {
        echo "Noticia creada con éxito.";
    } else {
        echo "Error al mover el archivo.";
    }
}
    $servername = "localhost";  // Cambia esto si tu base de datos no está en el mismo servidor
    $username = "root";
    $password = "";
    $dbname = "registros";
    // Insertar los datos en la base de datos (ajusta esto según tu configuración)
    // $servername, $username, $password y $dbname deben reemplazarse con tus propios datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO noticias (fecha_creacion, categoria, titulo, encabezado) VALUES ('$fecha', '$categoria', '$titulo', '$encabezado')";

    if ($conn->query($sql) === TRUE) {
        echo "Noticia creada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
