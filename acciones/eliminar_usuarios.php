<?php
    include ("../conexiondb.php");

    $peticion = "DELETE FROM usuarios WHERE identidicador = ". $_GET["id"];

    echo "$peticion";

    //mysqli_query($enlace,$peticion);

    echo '<meta http-equiv="refresh" content="0; url=../paneles/usuarios2.php">';
?>
