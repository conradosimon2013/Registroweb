


<?php
// Procesar el formulario y guardar la noticia en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $noticia = $_POST["noticia"];
    $autor = $_POST["autor"];
    $fecha = $_POST["fecha"];
    $carpetaImagenes = 'img/';
    $carpeta_destino = "img/";

    // Asegúrate de que la carpeta de destino existe o créala
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }

    // Verifica si se ha subido un archivo
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
        // Obtén información sobre la imagen cargada
        $nombre_archivo = basename($_FILES["imagen"]["name"]);
        $ruta_archivo = $carpeta_destino . $nombre_archivo;

        // Mueve la imagen cargada a la carpeta de destino
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_archivo)) {
            echo "La imagen se ha subido correctamente.";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "No se ha seleccionado ninguna imagen o se ha producido un error en la carga.";
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

    $sql = "INSERT INTO noticias (titulo, noticia, autor, fecha) VALUES ('$titulo', '$noticia', '$autor', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Noticia creada con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}else {
    echo "ERROR EN LA INSERSION DE DATOS XD";
}
?>
