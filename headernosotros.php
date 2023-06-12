<?php
  session_start(); // Iniciamos la Sesión
  if (isset($_SESSION["nombre"])) // Comprueba que se haya Iniciado Sesion 
  	{
	$conexion = mysqli_connect("localhost","root","","carta"); // Nos conectamos a la base de datos
	$nombre = $_SESSION["nombre"]; // Creamos la variable nombre que contiene la sesion
	$query = "SELECT imagen FROM clientes WHERE nombre = '$nombre'"; // Selecionamos la imagen en la Base de datos del usuario que ha inicaido sesion 
	$result = mysqli_query($conexion, $query); // Guardamos el resultado de la busqueda en la base de datos
	$row = mysqli_fetch_assoc($result); // Obtenemos la fila del resultado de la consulta SQL
	$ruta_imagen = $row['imagen']; // Obtiene la ruta de la imagen de la columna 'imagen' de la Base de Datos
    $nombre = $_SESSION["nombre"];
    $correo = $_SESSION["correo"];
    $consulta = "SELECT rol FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) >= 1) {
    $row = mysqli_fetch_assoc($resultado);
    $rol = $row["rol"];}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
  	 	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="basicos2.css"> <!-- Vinculamos el codigo CSS de la página -->
		<link rel="stylesheet" type="text/css" href="diseñonosotros.css"> <!-- Vinculamos el codigo CSS de la página -->
	</head>	
	<body>
	<header>
            <div class="menu">
                <div class="contenedor">
                    <div class="desplegable flexitem">
                        <a href="" class="trigger escritorio-oculto"><span class="i ri-menu-2-line"></span></a>
                        <div class="izquierda flexitem">
                            <div class="logo"><a href="index.php"><span class="redondo"></span>Til-limit</a></div>
                            <nav class="movil-oculto">
                                <ul class="flexitem menu2">
                                    <li><a href="./index.php">Inicio</a></li>
                                    <li class="hijo">
                                        <a href="productos.php">Productos
                                        <div class="sobrepuesto"><span>New!</span></div>
                                            <div class="icono-pequeño"><i class="ri-arcolumna-down-s-line"></i></div>
                                        </a>
                                        <div class="contenido">
                                            <div class="contenedor">
                                                <div class="desplegable">
                                                <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Abrigos</h4>
                                                            <ul>
                                                                <li><a href="./plumas.php">Plumas</a></li>
                                                                <li><a href="./anorak.php">Anorak</a></li>
                                                                <li><a href="./hardshell.php">Hardshell</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Chaquetas</h4>
                                                            <ul>
                                                                <li><a href="./impermeables.php">Impermeables</a></li>
                                                                <li><a href="./softshell.php">Softshell</a></li>
                                                                <li><a href="./cortavientos.php">Cortavientos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Camisetas</h4>
                                                            <ul>
                                                                <li><a href="./termicas.php">Térmicas</a></li>
                                                                <li><a href="./compresion.php">Compresión</a></li>
                                                                <li><a href="./mangacorta.php">Manga Corta</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Pantalones</h4>
                                                            <ul>
                                                                <li><a href="./escalada.php">Escalada</a></li>
                                                                <li><a href="./snow.php">Snow</a></li>
                                                                <li><a href="./largos.php">Largos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Calzado</h4>
                                                            <ul>
                                                                <li><a href="./botas.php">Botas</a></li>
                                                                <li><a href="./trekking.php">Trekking</a></li>
                                                                <li><a href="./deportivas.php">Deportivas</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Otros</h4>
                                                            <ul>
                                                                <li><a href="./gorros.php">Gorros</a></li>
                                                                <li><a href="./mochilas.php">Mochilas</a></li>
                                                                <li><a href="./guantes.php">Guantes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol productos3">
                                                        <div class="columna">
                                                            <div class="media">
                                                                <div class="thumbnail object-cover">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <li><a href="contacto.php">Contacto</a></li>
                                    </li>
                                    <li><a href="nosotros.php">Nosotros</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="derecha">
                    <?php if (isset($_SESSION["nombre"])) // Comprueba que se haya Iniciado Sesion 
  { ?>
                        <li><a href="./VerCarta.php" class="carrito">
                            <?php }else{        echo'<a href="./iniciar_sesion.php" class="carrito">';
 }?>
                        <div class="icono-grande">
                                <i class="ri-shopping-cart-line"></i>
			</div>
            <div class="menu3"> <!-- Creamos la sección de Nuestro Perfil -->
				<button class="contenedor-perfil">
					<?php
						if (isset($_SESSION["nombre"])) // Comprueba que se haya Iniciado Sesion 
							{
							echo '<img src="' . $ruta_imagen . '" class="icono">'; // Mostrar la imagen almacenada en la sesión de usuario
							} 
						else // Si no se ha iniciado sesioón se redirige a la pagina principal
							{
							header("Location: ./index.php");
							exit();
							}
					?>
				</button> 
				<div class="menu3-content"> <!-- Creamos el contendeor del menú desplegable de nuestro perfil -->
					<?php
						if (isset($_SESSION["nombre"])) // Comprueba que se haya Iniciado Sesion entonces se desplegan las dos secciones nuevas
							{
							echo '<form method="POST" action="./perfil.php"><button type="submit" name="perfil" class¨="sesion">Perfil</button></form>';
                            echo '<form method="POST" action="./pedidos.php"><button type="submit" name="pedidos" class¨="sesion">Pedidos</button></form>';
                            if ($rol == "administrador"): 
                                echo '<form method="POST" action="./administrador.php"><button type="submit" name="admin" class¨="sesion">Administrador</button></form>';
                                endif; 
                                }
                            echo '<form method="POST" action=""><button type="submit" name="cerrar_sesion" class¨="sesion">Cerrar Sesión</button></form>';
						if (isset($_POST['cerrar_sesion'])) // Verifica que se ha pulsado el boton de cerrar sesión 
							{
                            echo "<script>window.location.replace('index.php');</script>";
                            session_destroy(); // Se destruye la sesión
							}
					?>
				</div>
         </div>
         </a></li>
        </ul>
      </div>
			</div>
        </header>
<!-- Mostrar para el usuario no logeado -->
<?php
  } 
  else 
  {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="basicos.css"> <!-- Vinculamos el codigo CSS de la página -->
        <link rel="stylesheet" type="text/css" href="diseñonosotros.css">
	</head>
	<body>
	<header>
            <div class="menu">
                <div class="contenedor">
                    <div class="desplegable flexitem">
                        <a href="" class="trigger escritorio-oculto"><span class="i ri-menu-2-line"></span></a>
                        <div class="izquierda flexitem">
                            <div class="logo"><a href="index.php"><span class="redondo"></span>Til-limit</a></div>
                            <nav class="movil-oculto">
                                <ul class="flexitem menu2">
                                    <li><a href="index.php">Inicio</a></li>
                                    <li class="hijo">
                                        <a href="productos.php">Productos
                                        <div class="sobrepuesto"><span>New!</span></div>
                                            <div class="icono-pequeño"><i class="ri-arcolumna-down-s-line"></i></div>
                                        </a>
                                        <div class="contenido">
                                            <div class="contenedor">
                                                <div class="desplegable">
                                                <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Abrigos</h4>
                                                            <ul>
                                                                <li><a href="./plumas.php">Plumas</a></li>
                                                                <li><a href="./anorak.php">Anorak</a></li>
                                                                <li><a href="./hardshell.php">Hardshell</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Chaquetas</h4>
                                                            <ul>
                                                                <li><a href="./impermeables.php">Impermeables</a></li>
                                                                <li><a href="./softshell.php">Softshell</a></li>
                                                                <li><a href="./cortavientos.php">Cortavientos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Camisetas</h4>
                                                            <ul>
                                                                <li><a href="./termicas.php">Térmicas</a></li>
                                                                <li><a href="./compresion.php">Compresión</a></li>
                                                                <li><a href="./mangacorta.php">Manga Corta</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Pantalones</h4>
                                                            <ul>
                                                                <li><a href="./escalada.php">Escalada</a></li>
                                                                <li><a href="./snow.php">Snow</a></li>
                                                                <li><a href="./largos.php">Largos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Calzado</h4>
                                                            <ul>
                                                                <li><a href="./botas.php">Botas</a></li>
                                                                <li><a href="./trekking.php">Trekking</a></li>
                                                                <li><a href="./deportivas.php">Deportivas</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="columna">
                                                            <h4>Otros</h4>
                                                            <ul>
                                                                <li><a href="./gorros.php">Gorros</a></li>
                                                                <li><a href="./mochilas.php">Mochilas</a></li>
                                                                <li><a href="./guantes.php">Guantes</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol productos3">
                                                        <div class="columna">
                                                            <div class="media">
                                                                <div class="thumbnail object-cover">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <li><a href="contacto.php">Contacto</a></li>
                                    </li>
                                    <li><a href="nosotros.php">Nosotros</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="derecha">
                    <?php if (isset($_SESSION["nombre"])) // Comprueba que se haya Iniciado Sesion 
  { ?>
                        <li><a href="./VerCarta.php" class="carrito">
                            <?php }else{        echo'<a href="./iniciar_sesion.php" class="carrito">';
 }?>
                        <div class="icono-grande">
                                <i class="ri-shopping-cart-line"></i>
                        </div>
                        </a></li>
                    </ul>
                </div>
                <div>
                 <form method="POST" action="iniciar_sesion.php"> <!-- Vinculamos el boton con la sección Iniciar Sesión -->
				    <button type="submit" name="boton" class="btnantiguo">Iniciar Sesión</button> <!-- Creamos la sección Iniciar Sesión -->
			    </form>
                </div>
            </div>
        </header>
        <?php
  }
?>