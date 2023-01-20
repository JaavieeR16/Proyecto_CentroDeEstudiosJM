<?php
    include("../conexiondb.php");

    $identificador = $_POST['identificador'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $consulta = "UPDATE registro SET usuario='$usuario', contraseña='$contraseña', email='$email', telefono='$telefono' WHERE identificador = '$identificador'";
    $resultado = mysqli_query($enlace, $consulta);

    if ($resultado) {
        header("Location: ../paneles/registros.php");
    }
?>