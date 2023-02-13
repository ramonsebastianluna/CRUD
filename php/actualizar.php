<?php
include 'conex.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];


$actualizar = "UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido', `direccion` = '$direccion' WHERE `usuarios`.`id` = '$id'";

$conexion -> query($actualizar);

header("Location: ../ver.php")

?>