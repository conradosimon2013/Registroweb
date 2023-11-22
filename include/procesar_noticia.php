


<?php
// Procesar el formulario y guardar la noticia en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $noticia = $_POST["noticia"];
    $autor = $_POST["autor"];
    $fecha = $_POST["fecha"];
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

    $sql = "INSERT INTO noticias (titulo, noticia, autor, fecha) VALUES ('$titulo', '$noticia', '$autor', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Noticia creada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("location: ../inicio.php");
}else {
    echo "ERROR EN LA INSERSION DE DATOS XD";
}
?>
