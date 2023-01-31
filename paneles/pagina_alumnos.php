<?php
    $conex = mysqli_connect("localhost","root","@Mislata.2022","proyecto","3306");
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
            <body class="body_alumnos">
                <div class="header">
                    <nav>
                        <ul class="menu">
                            <li><i class='bx bx-home-alt-2'></i><a class="lugar" href="pagina_alumnos.php">Inicio</a></li>
                            <li><i class='bx bx-user'></i><a href="#">Mi Cuenta</a></li>
                            <li><i class='bx bx-news'></i><a href="#">Noticias</a></li>
                            <li><i class='bx bxs-contact' ></i><a href="#">Contacto</a></li>
                            <li><i class='bx bx-log-out'></i><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                    <img src="../logos/logo_blanco.png">
                    <div class="contenido_alumnos">
                        <h1>Desarrollo de Aplicaciones Multiplataforma</h1>
                        <hr>
                        <table class="tabla_alumnos">
                            <tr>
                                <th>
                                    <a href="#">Acceso a Datos</a>
                                <th>
                                    <a href="#">Programación Multimedia</a>
                                </th>
                                <th>
                                    <a href="#">Desarrollo de Interfaces</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <a href="#">Programación de Servicios y Procesos</a>
                                </th>
                                <th>
                                    <a href="#">Sistema de Gestión Empresarial</a>
                                </th>
                                <th>
                                    <a href="#">Inglés Técnico</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                                <td>
                                    <a href="#"><img src="../imagenes/asignaturas.jpg"></a>
                                </td>
                            </tr>
                        </table>
                    </div>
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
                </div>
            </body>
        </html>






