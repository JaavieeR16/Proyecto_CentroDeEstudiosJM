<?php
    include ("../conexiondb.php");

    $peticion="INSERT INTO cargos VALUES (null,'".$_POST['cargo']."')";
    $resultado = mysqli_query($enlace,$peticion);

    echo '<meta http-equiv="refresh" content="0; url=../paneles/cargos.php ">';
?>