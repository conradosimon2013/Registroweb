
<?php session_start() ?>

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
<body>
    <img src="https://www.plantillaspyme.com/modules/ltw_simpleblog/covers/77.jpg" alt="" class="fondo">

    <header> 
        <h1 class="titulo">Registro</h1>
        <div class="info">AnyForm</div>
    </header>
    <main>
        <div class="grupocv">
            <div>
                <img class="photo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/JoseGalizPErfil.jpg/1024px-JoseGalizPErfil.jpg" alt="">
         </div>
            <div class="grupotextocv">
                <div>
                    <h3>Conrad Peter</h3>
                </div>

                <div>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Aut aperiam reprehenderit odit ea ullam itaque nam magnam sit saepe,
                         corporis ducimus quis explicabo maiores? Voluptate corporis nobis nam sed magnam?</p>
                </div>
            </div>
        </div>
         <div class="container-input"> 

            <div class="container-reglog"><div class="reglog active" id="login">LOGIN</div> <div id="register" class="reglog">REGISTRARSE</div></div>
        
            <div class="login" id="formlog">
              
                <form action="" method="post">
                <label class="aca"for="">Usuario</label>
                <input type="text" required name="usuario" id="usuario" placeholder="Nombre">
                <label for="">Contraseña</label>
                <input type="password" required name="contraseña" id="contraseña" placeholder="Contraseña">
                <?php
               
    $servername = "localhost";  // Cambia esto si tu base de datos no está en el mismo servidor
    $username = "root";
    $password = "";
    $dbname = "registros";
    
    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
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