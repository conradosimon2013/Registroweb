<?php
session_start(); // Asegúrate de iniciar la sesión al principio del archivo

// Verifica si la variable de sesión está establecida
if (!isset($_SESSION['usuario'])) {
    header("Location: register.php"); // Redirecciona al inicio de sesión si no ha iniciado sesión
    exit();
}
// El resto del contenido de tu página protegida va aquí
?>
<?php
if (!isset($_SESSION['usuario'])) {
    header("Location: papa.php");

    exit(); }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="scripts/main.js?v=<?php echo(rand()); ?>"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
</head>

<body>
<?php
include 'include/header.php';
?>
    <img src="https://www.plantillaspyme.com/modules/ltw_simpleblog/covers/77.jpg" alt="" class="fondo">

<main class="mein">
<div class="principal">

</div>
<aside>

</aside>
</main>
    <footer>

    </footer>
         
      

</body>
</html>