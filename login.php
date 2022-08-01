<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Crud - Login</title>
    <link rel="stylesheet" href="css/estilos-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="validacion.php">
        <div class="tituloForm">
            <h1>LogIn</h1>
        </div>
        <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>
        <br>
        <input id="contraseña" type="password" name="contraseña" placeholder="Contraseña" required>
        <br>
        <input id="login" type="submit" name="iniciar" value="Iniciar Sesión";>
        <br>
    </form>
    <div class="volver">
        <a href="index.php">Volver</a>
    </div>
</body>
</html>