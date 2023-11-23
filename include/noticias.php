<?php
include "config.php";
// Consultar la base de datos para obtener las noticias
$sql = "SELECT id, titulo, noticia, autor, fecha FROM noticias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada noticia
    while($row = $result->fetch_assoc()) {
        setlocale(LC_TIME, 'es_ES');
        $fechabuena = strftime('%e de %B de %Y', strtotime($row["fecha"]));
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p> " . $fechabuena . "</p>";
        
        echo "<p> " . $row["noticia"] . "</p>";
        if (isset($_SESSION['usuario'])) {
            if (($_SESSION['usuario'] == 'conrado2011')){
                echo '<a href="eliminar_elemento.php?id=' . $row["id"] . '">Eliminar</a>';
             };};
        echo "<hr>"; 
    }
} else {
    echo "No se encontraron noticias.";
}

// Cerrar la conexión
$conn->close();
?>