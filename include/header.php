<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    header {
        background-color: rgba(51, 51, 51, 0.74);
        padding: 8px 15px;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .menu-icon {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    nav {
        display: flex;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #ffcc00;
    }

    @media screen and (max-width: 768px) {
        .menu {
            display: none;
        }

        .menu-icon {
            display: block;
        }

        nav {
            flex-direction: column;
            width: 100%;
            position: absolute;
            top: 70px;
            left: 0;
            background-color: #333;
            text-align: center;
            display: none;
        }

        nav.show {
            display: flex;
        }
    }
</style>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/main.js?v=<?php echo(rand()); ?>"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
</head>
<header>
    <div class="logo">Metin2</div>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <nav class="menu">
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <span class=""><?php

            


            if (isset($_SESSION['usuario'])) {
                if (($_SESSION['usuario'] == 'conrado2011')){
                    echo '<a href="cerrar.php"> Nueva noticia</a>';
                }
             echo "Bienvenido, " . $_SESSION['usuario'];
            }
            ?> 
            <?php
            if (isset($_SESSION['usuario'])) {
             echo '<a href="cerrar.php"> Cerrar sesión</a>';
            }
            ?> 
        
        </span>
    </nav>
</header>

<script>
    function toggleMenu() {
        var nav = document.querySelector('nav.menu');
        nav.classList.toggle('show');
    }
</script>