<?php
    include ("../conexiondb.php");

    $identificador = $_GET['identificador'];

    $consulta = ("DELETE FROM usuarios WHERE identificador = '$identificador'");

    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado) {

        header("Location: ../paneles/usuarios2.php");

    }
?>
