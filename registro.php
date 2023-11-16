<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloreg.css">
  <title>Mensaje de Usuario Existente</title>
</head>
<body>
<?php

// Conectamos a la base de datos
$db = new PDO("mysql:host=localhost;dbname=registros", "root", "");

// Recibimos los datos del formulario
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Verificamos que el usuario no exista
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultado = $db->query($sql);

if ($resultado->fetch()) {
  // El usuario ya existe
  echo '<div class="container">
  <div class="mensaje">
    <span class="icon">&#10004;</span>
    <p>¡Error!</p>
    <p class="descripcion">El usuario ya existe.</p>
  </div>
</div>';
} else {
  // Insertamos los datos en la base de datos
  $sql = "INSERT INTO usuarios (usuario, contraseña, email) VALUES ('$usuario', '$contraseña', '$email')";
  $resultado = $db->query($sql);

  // Si se insertaron los datos correctamente
  if ($resultado) {
    // Redireccionamos al usuario a la página de inicio
    header("Location: inicio.php");
  } else {
    // Mostramos un mensaje de error
    echo "No se pudo registrar al usuario.";
  }
} ?>
</body>
</html>
