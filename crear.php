<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			    <a href="home.html">Inicio</a>
		    </li>
	    </ul>
    </nav>
    <main>
        <form method="POST" action="php/insert.php">
            <div class="tituloForm">
                <h1>Crear usuario</h1>
            </div>
            <input id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input id="apellido" type="text" name="apellido" placeholder="Ingrese su apellido" required>
            <input id="direccion" type="text" name="direccion" placeholder="Ingrese su dirección" required>
            <input id="guardar" type="submit" name="Guardar" value="Guardar";>
        </form>
        <div class="volver">
            <a href="home.html">Volver</a>
        </div>
    </main>
    <footer>
        <p>Sítio web desarrollado por <a href="https://www.linkedin.com/in/andresscazziotta/" target="_blank">Andres Scazziotta</a> y <a href="https://www.linkedin.com/in/ramonsebastianluna/" target="_blank">Luna Ramón Sebastián</a></p>
    </footer>
</body>
</html>