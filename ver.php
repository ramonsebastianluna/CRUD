<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Mi Crud - Ver</title>
    <link rel="stylesheet" href="css/estilos-ver.css">
    <link rel="stylesheet" href="css/Normalize-v8.0.1.css">
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

            include ('conex.php');

            $consulta="SELECT *from usuarios";
            $result=$conexion->query($consulta); 

            if($result->num_rows>0) {

                echo "<table>";
                echo "<tr><th>ID</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Dirección</th>";
                echo "<th colspan='2'>Acción</th>";
                echo "</tr>";

            while ($filas = mysqli_fetch_array($result)){

                echo "<tr>";
                echo "<td>"; echo $filas['id']; echo "</td>"; 
                echo "<td>"; echo $filas['nombre']; echo "</td>"; 
                echo "<td>"; echo $filas['apellido']; echo "</td>";
                echo "<td>"; echo $filas['direccion']; echo "</td>";		       
                echo "<td>"; echo "<button type='button'> <a href='editar.php?id=" . $filas['id'] . "'>Editar</a></button>"; echo "</td>";
                echo "<td>"; echo "<button type='button'> <a href='borrar.php?id=" . $filas['id'] . "'>Borrar</a></button>"; echo "</td>";

                echo "</tr>";
            }
        
            echo "</table>";
            }
        ?>
    </main>
    <footer>
        <p>Sítio web desarrollado por <a href="https://www.linkedin.com/in/andresscazziotta/" target="_blank">Andres Scazziotta</a> y <a href="https://www.linkedin.com/in/ramonsebastianluna/" target="_blank">Luna Ramón Sebastián</a></p>
    </footer>
</body>
</html>