<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);


    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

    

    /*VERIFICAR QUE EL CORREO NO SE REPITA*/
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("El correo ya se encuentra registrado, intenta con otro diferente");
                window.location = "../index.php";
        
            </script>
        ';
        exit();
        
    }
   

    /*VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BASE DE DATOS*/
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("El usuario ya se encuentra registrado, intenta con otro diferente");
                window.location = "../index.php";
        
            </script>
        ';
        exit();
        
    }
    //mysqli_close($conexion);

    $EJECUTAR = mysqli_query($conexion, $query);

    if($EJECUTAR){
        echo '
        
        <script>    
            alert("usuario almacenado exitosamente");
            window.location = "../index.php";
        
        </script>';
    }else{
        echo '
        
        <script>    
            alert("intentalo de nuevo usuario no registrado");
            window.location = "../index.php";
        
        </script>';

    }
    mysqli_close($conexion);

?>
