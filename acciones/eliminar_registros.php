<?php
    include ("../conexiondb.php");

    $identificador = $_GET['identificador'];

    $consulta = ("DELETE FROM registro WHERE identificador = '$identificador'");

    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado) {

        header("Location: ../paneles/registros2.php");

    }
?>