<?php
  include("headerperfil.php");
?>
<title>Perfil</title>
        <div class="estilocontrasena">
            <h1 class="estilocontrasena">Mi Perfil</h1>
            <h3 class="estilocontrasena">Nombre: 
                <?php
                    $usuario = $_SESSION["nombre"];
                    echo ucfirst($usuario);
                ?> 
            </h3>
            <h3 class="estilocontrasena">Correo: 
                <?php
                    $correo = $_SESSION["correo"];
                    echo ($correo);
                ?> 
            </h3>
            <h3 class="estilocontrasena">
				<span>Contraseña: *********</span>
				<button class="btn-cambio"><a href="cambiarcontrasena.php">Cambiar Contraseña</a></button>
			</h3>
            <h3 class="estilocontrasena">
                <form method="post" enctype="multipart/form-data">
				<span>Imagen:</span><br>
                <input type="file" name="imagen"><br>
                <input class="btn-img" type="submit" name="imagen" value="Subir Imagen">
                </form>
		</h3>
        </div>
    </body>
    <?php
if (isset($_POST['imagen'])) 
{
    $nombreArchivo = $_FILES['imagen']['name'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $tamanoArchivo = $_FILES['imagen']['size'];
    $rutaArchivo = $_FILES['imagen']['tmp_name'];

   
    // Borrar la imagen anterior
    $consulta2 = "SELECT imagen FROM clientes WHERE nombre = '$usuario'";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $row = mysqli_fetch_assoc($resultado2);
    $imagenAnterior = $row['imagen'];
    if ($imagenAnterior != './imagenes/anonimo.png') {
        unlink($imagenAnterior);
    }

    // Mover el archivo cargado a una ubicación permanente
    $rutaDestino = "./imagenes/" . $nombreArchivo;
    move_uploaded_file($rutaArchivo, $rutaDestino);


 // Verificar si se ha cargado una imagen
if (strlen($nombreArchivo) <= 0) 
{
// Establecer ruta por defecto si no se ha cargado ninguna imagen
$rutaDestino = "./imagenes/anonimo.png";
}
else 
{

$consulta = "UPDATE clientes SET imagen = '$rutaDestino' WHERE nombre = '$usuario'";
$resultado = mysqli_query($conexion, $consulta);
}
if ($resultado)
{
    echo "¡<script>window.location.replace('perfil.php');</script>";
}
}
  include("footer.php")
?>
</html>
