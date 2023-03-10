<?php
    error_reporting(0);
    include ("conexiondb.php");

    //seguridad de sesiones paginación.
    session_start();
    error_reporting(0);
    $varsesion= $_SESSION['usuario'];
    if ($varsesion== null || $varsesion=''){
        echo 'No tienes autorización para entrar en esta página.';
        die();
    }
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="shortcut icon" href="../logos/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Centro de Estudios JM</title>
    </head>
    <body class="body_paneldecontrol">
    <div class="header">
        <nav>
            <ul class="menu">
                <li><i class='bx bx-home-alt-2'></i><a href="paneldecontrol.php">Inicio</a></li>
                <li><i class='bx bx-user'></i><a class="lugar" href="usuarios.php">Usuarios</a></li>
                <li><i class='bx bxs-id-card'></i><a href="registros.php">Registros</a></li>
                <li><i class='bx bx-shield-alt-2'></i><a href="cargos.php">Cargos</a></li>
                <li><i class='bx bx-log-out'></i><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <img src="../logos/logo_blanco.png">
    </div>
    <div class="contenido_usuarios">
        <h1>Gestión de usuarios</h1>
        <hr>
        <table class="tabla_usuarios" cellpaddin=0 cellspacing=0>
            <tr>
                <th>Identificador</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Cargo</th>
                <th colspan="2">Acciones</th>
            </tr>
            <?php
            //Abro la conexión con la base de datos
            $conex = mysqli_connect("localhost","root","@Mislata.2022","proyecto","3306");

            //Le piedo algo a la base de datos
            $peticion="SELECT * FROM usuarios  LIMIT 15,50";
            $resultado = mysqli_query($conex,$peticion);

            //Devuelvo por pantalla
            while ($fila = $resultado->fetch_assoc()) {
                echo '<tr>
                                    <td>'.$fila['identificador'].'</td>
                                    <td>'.$fila['usuario'].'</td>
                                    <td>'.$fila['contraseña'].'</td>
                                    <td>'.$fila['id_cargo'].'</td>
                                    <td><a href="../acciones/actualizar_usuarios.php?identificador='.$fila['identificador'].'"><i class="bx bx-pencil"></i></a></td>
                                    <td><a href="../acciones/eliminar_usuarios.php?identificador='.$fila['identificador'].'"><i class="bx bx-trash"></i></a></td>
                                </tr>';
            }
            ?>
        </table>
        <hr>
        <h1 class="titulos_panelesabajo">Insertar usuario nuevo</h1>
        <form class="formulario_insertar_usuarios" action="../acciones/insertar_usuarios.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="contraseña" placeholder="Contraseña">
            <input type="text" name="id_cargo" placeholder="Cargo">
            <input type="submit" name="añadir" value="Añadir">
        </form>
        <hr>
        <h1 class="titulos_panelescargos">CARGOS</h1>
        <div class="h3">
            <h3>1. Administrador</h3><h3>2. Alumno</h3>
        </div>
    </div>
    <section class="paginacion">
        <ul>
            <li><a href="usuarios.php">1</a></li>
            <li><a href="usuarios2.php" class="active">2</a></li>
        </ul>
    </section>
    <footer>
        <hr>
        <div>
            <a class="ig" href="https://www.instagram.com/jaavieer16/?hl=es" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a class="tw" href="https://twitter.com/jaavieer_16/" target="_blank"><i class='bx bxl-twitter' ></i></a>
            <a class="yt" href="https://www.youtube.com/channel/UC-IvM1PWGZehbZUn3ZrCtiA" target="_blank"><i class='bx bxl-youtube' ></i></a>
            <a class="gh" href="https://github.com/JaavieeR16" target="_blank"><i class='bx bxl-github' ></i></a>
        </div>
        <h5>Todos los derechos reservados © 2023 -2024 Javier Monroy Muñoz</h5>
    </footer>
    </body>
</html>
