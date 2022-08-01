<?php
include 'conex.php';

if (isset($_GET["id"])) {
    $id=$_GET["id"];
    $consulta="DELETE FROM usuarios WHERE `usuarios`.`id` = '$id'";

    $conexion->query($consulta);
}

header("Location: ver.php");

?>