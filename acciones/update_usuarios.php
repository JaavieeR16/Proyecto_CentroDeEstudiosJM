<?php
    include ("../conexiondb.php");

    $identificador = $_POST['identificador'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta = "UPDATE usuarios SET usuario='$usuario', contraseña='$contraseña' WHERE identificador = '$identificador'";
    $resultado = mysqli_query($enlace, $consulta);

    if($resultado){
        header("Location: ../paneles/usuarios.php");
    }
?>