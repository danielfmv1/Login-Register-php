<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script> 
            alert("por favor debes iniciar sesion");     
            window.location = "index.php";
        
        </script>
        
        ';
        //header('location: index.php');
        session_destroy();
        die();
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida </title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Bienvenido menu principal</h1>
    
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>

    <header> 
        <div class="header_superior">
            <div class="logo">
                <img src="img/ciberseguridad.png" alt="">
            </div>
            <div class="search">
                <input type="search">


            </div>


            <div class="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>



    </header>


    
</body>
</html>