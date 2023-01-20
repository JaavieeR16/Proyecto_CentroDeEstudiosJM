<?php
    include("../conexiondb.php");

    $identificador = $_GET['identificador'];

    $consulta = ("DELETE FROM cargos WHERE identificador = '$identificador'");

    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado) {

        header("Location: ../paneles/cargos.php");

    }
?>