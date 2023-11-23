<?php
include "include/config.php"
// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Tu código de conexión a la base de datos aquí

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "¡Inicio de sesión exitoso!";
        // Puedes redirigir o realizar otras acciones después de un inicio de sesión exitoso
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}

// Cierra la conexión
$conn->close();
?>


<?php
$cualquiera = new mysqli($servername, $username, $password, $dbname);

?>

