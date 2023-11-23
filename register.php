 


<?php 
    
    session_start(); 
    if (isset($_SESSION['usuario'])){
        header('Location: inicio.php');
        exit();
    }

        
    
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
</head>
<body>
    <?php include 'include/header.php' ?>
    
    <img src="https://us.123rf.com/450wm/mpfphotography/mpfphotography1405/mpfphotography140500014/28138648-noticias-de-la-palabra-nube-de-etiquetas-vector-textura-de-fondo.jpg?ver=6" alt="" class="fondo">

    
    <main>
        <h2>Inicia sesión o registrate para leer las noticias de tu ciudad!</h2>
       
         <div class="container-input"> 

            <div class="container-reglog"><div class="reglog active" id="login">LOGIN</div> <div id="register" class="reglog">REGISTRARSE</div></div>
        
            <div class="login" id="formlog">
              
                <form action="" method="post">
                <label class="aca"for="">Usuario</label>
                <input type="text" required name="usuario" id="usuario" placeholder="Nombre">
                <label for="">Contraseña</label>
                <input type="password" required name="contraseña" id="contraseña" placeholder="Contraseña">
 <?php
    include "include/config.php";
    // Tu código de conexión a la base de datos aquí
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
    
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $_SESSION['usuario'] = $usuario; // Establece la variable de sesión
            header("Location: inicio.php"); // Redirecciona a la página protegida
            exit();
        } else {
            echo '<p class="errorsesion">Usuario o contraseña incorrectos</p>';
        }
    }
    
    // Cierra la conexión
    ?>
                <input class="submit"  type="submit" value="Iniciar Sesión"></form>
            </div>
            <div class="register" id="formreg">
              
                <form action="registro.php" method="post">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Dirección de correo electrónico">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" placeholder="Nombre de usuario">
                    <label for="">Contraseña</label>
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    <input type="submit" value="Registrar" class="submit">
                    
                  </form>
            </div>
            
            
        </div>
    </main>

</body>
</html>