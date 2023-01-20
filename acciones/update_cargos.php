<?php
    include("../conexiondb.php");

    $identificador = $_POST['identificador'];
    $cargo = $_POST['cargo'];

    $consulta = "UPDATE cargos SET cargo='$cargo' WHERE identificador = '$identificador'";
    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado) {
        header("Location: ../paneles/cargos.php");
    }
?>
