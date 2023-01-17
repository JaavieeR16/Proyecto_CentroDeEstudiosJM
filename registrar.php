<?php

    include 'conexiondb.php';
    /*error_reporting(0);*/

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $consulta = "INSERT INTO registro (usuario, contraseña, email, telefono) VALUES ('$usuario','$contraseña','$email','$telefono')";
    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado){
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
                <h1 class="h1_validar">¡Registrado correctamente!</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=login.php">';
    }else{
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
                <h1 class="h1_validar">Error en el registro, vuelva a intentarlo</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=registro.php">';
    }
?>
