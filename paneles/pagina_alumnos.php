<?php
    $conex = mysqli_connect("localhost","root","","proyectoad","3307");
    //seguridad de sesiones paginación.
    session_start();
    error_reporting(0);
    $varsesion= $_SESSION['usuario'];
    if ($varsesion== null || $varsesion=''){
        echo 'No tienes autorización para entrar en esta página.';
        die();
    }
?>