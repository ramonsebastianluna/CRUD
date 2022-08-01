<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Mi Crud - Crear usuario</title>
    <link rel="stylesheet" href="css/Normalize-v8.0.1.css">
    <link rel="stylesheet" href="css/estilos-crear.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
	    <ul>
		    <li>
			    <a href="crear.php">Crear usuario</a>
		    </li>
            <li>
			    <a href="ver.php">Ver registros</a>
		    </li>
            <li>
			    <a href="home.php">Inicio</a>
		    </li>
	    </ul>
    </nav>
    <main>
        <form method="POST" action="insert.php">
            <div class="tituloForm">
                <h1>Crear usuario</h1>
            </div>
            <input id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <br>
            <input id="apellido" type="text" name="apellido" placeholder="Ingrese su apellido" required>
            <br>
            <input id="direccion" type="text" name="direccion" placeholder="Ingrese su dirección" required>
            <br>
            <input id="guardar" type="submit" name="Guardar" value="Guardar";>
            <br>
        </form>
        <div class="volver">
            <a href="home.php">Volver</a>
        </div>
    </main>
    <footer>
        <p>Sítio web desarrollado por <a href="https://www.linkedin.com/in/andresscazziotta/" target="_blank">Andres Scazziotta</a> y <a href="https://www.linkedin.com/in/ramonsebastianluna/" target="_blank">Luna Ramón Sebastián</a></p>
    </footer>
</body>
</html>