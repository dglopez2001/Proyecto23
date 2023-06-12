<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="diseñoregistro.css">
        <link rel="stylesheet" type="text/css" href="basicos.css"> <!-- Vinculamos el codigo CSS de la página -->
        <title>Registro</title>
    </head>
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
                                                                <li><a href="./cortos.php">Cortos</a></li>
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
            </div>
        </header>
    <body>
        <form method="post" enctype="multipart/form-data">
            <h1>Regístrate</h1>
            <input type="text" name="nombre" placeholder="Nombre"><br><br>
            <input type="password" name="contrasena" placeholder="Contraseña"><br><br>
            <input type="email" name="correo" placeholder="Correo"><br><br>
            <input type="text" name="direccion" placeholder="Dirección"><br>
            <input type="file" name="imagen"><br><br>
            <input type="submit" name="registrar" value="Registro"><br>
            <button><a href="./iniciar_sesion.php">Ya tengo una cuenta</a></button>
            <button><a href="./index.php">Seguir como invitado</a></button>
        </form>
        <?php
  include("footer.php")
?>
        <?php
            include("registrar2.php")
        ?>
    </body>
</html>