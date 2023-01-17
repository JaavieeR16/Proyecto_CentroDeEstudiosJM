<?php
    include ("conexiondb.php");

    $peticion = "DELETE FROM usuarios WHERE id = ".$_GET['id']."";

    mysqli_query($enlace,$peticion);

    echo "Eliminando usuario, espere...";
    echo '<meta http-equiv="refresh" content="2; url=paneldecontrol.php">';
?>