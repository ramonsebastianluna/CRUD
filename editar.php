<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Mi Crud - Editar</title>
    <link rel="stylesheet" href="css/Normalize-v8.0.1.css">
    <link rel="stylesheet" href="css/estilos-editar.css">
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
        <?php
            include 'conex.php';
           
            if (isset($_GET["id"])) {
	            $id=$_GET["id"];
	            $consulta="SELECT * from usuarios where id='$id'";
	
                $result=$conexion->query($consulta);
                $valores = mysqli_fetch_array($result);
            }
        ?>
        <form method="POST" action="actualizar.php">
            <div class="tituloForm">
                <h1>Editar datos</h1>
            </div>
            <input id="id-bd" type=text name=id required readonly value="<?php echo $valores['id'];?>">
		    <br>
            <input id="nombre" type="text" name="nombre" required value="<?php echo $valores['nombre'];?>">
            <br>
            <input id="apellido" type="text" name="apellido" required value="<?php echo $valores['apellido'];?>">
            <br>
            <input id="direccion" type="text" name="direccion" required value="<?php echo $valores['direccion'];?>">
            <br>
            <input id="guardar" type="submit" name="Guardar" value="Guardar">
        </form>
        <div class="volver">
            <a href="ver.php">Volver</a>
        </div>
    </main>
    <footer>
        <p>Sítio web desarrollado por <a href="https://www.linkedin.com/in/andresscazziotta/" target="_blank">Andres Scazziotta</a> y <a href="https://www.linkedin.com/in/ramonsebastianluna/" target="_blank">Luna Ramón Sebastián</a></p>
    </footer>
</body>
</html>

























