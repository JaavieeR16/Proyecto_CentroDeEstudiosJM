<?php
    //include ("../conexiondb.php");

    $enlace = mysqli_connect("localhost","root","","proyecto","3307");

    $identificador = $_GET['identificador'];
    $eliminar = "DELETE FROM usuarios WHERE identificador = 'identificador'";

    $resultado = $mysqli->query($eliminar);

    /*$peticion = "DELETE FROM usuarios WHERE identidicador = ". $_GET["id"];

    echo "$peticion";

    //mysqli_query($enlace,$peticion);

    echo '<meta http-equiv="refresh" content="0; url=../paneles/usuarios2.php">';*/
?>
