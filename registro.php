
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/main.js?v=<?php echo(rand()); ?>"></script>
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
</head>
<body class="registrobody">
    <div class="registroinfo"><?php

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
  echo "El usuario ya existe.";
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
</div>
</body>
</html>