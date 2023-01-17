<?php
    include ("conexiondb.php");
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8ed440f220.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Centro de Estudios JM</title>
    </head>
    <body class="body_login">
        <form class="box" method="post" action="validar.php">
            <h1>Inicio de Sesión</h1>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" name="entrar" value="Iniciar Sesión">
        </form>
    </body>
</html>