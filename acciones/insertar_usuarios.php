<?php
    include ("conexiondb.php");

    $peticion="INSERT INTO usuarios VALUES (NULL,'".$_POST['usuario']."','".$_POST['contraseña']."','".$_POST['id_cargo']."')";
    $resultado = mysqli_query($enlace,$peticion);

    echo '<meta http-equiv="refresh" content="0; url=usuarios2.php ">';
?>