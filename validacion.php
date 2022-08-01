<?php 

include 'conex.php';

$usuario = $_POST['usuario'];
$contrasenia = $_POST['contraseña'];

$consulta = "SELECT usuario, contrasenia FROM administradores";
$resultado = $conexion->query($consulta);

$miArray = $resultado->fetch_array();

$user = $miArray['usuario'];
$pass = $miArray['contrasenia'];

if ($usuario == $user && $contrasenia == $pass){
    header("Location: home.php");
} else {
    echo "<html><head><script>alert('Usuario o contraseña incorrecto');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>