<?php
include 'conex.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];


$insertar = "INSERT INTO usuarios (nombre, apellido, direccion) VALUES ('$nombre', '$apellido', '$direccion')";

$conexion -> query($insertar);

echo "<html><head><script>alert('Usuario creado correctamente');</script></head></html>";
echo "<meta http-equiv='refresh' content='0; url=crear.php'>";

?>