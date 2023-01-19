<?php
    include ("../conexiondb.php");

    $peticion = "INSERT INTO registro VALUES (null,'" . $_POST['usuario'] . "','" . $_POST['contraseña'] . "','" . $_POST['email'] . "','" . $_POST['telefono'] . "')";

    $resultado = mysqli_query($enlace, $peticion);

    echo '<meta http-equiv="refresh" content="0; url=../paneles/registros2.php ">';
?>