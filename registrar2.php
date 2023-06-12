<?php 
    include("conexiondb.php");

    if (isset($_POST['registrar'])) 
        {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['direccion']) >= 1) 
            {
            $nombre = trim($_POST['nombre']);
            $correo = trim($_POST['correo']);
            $direccion = trim($_POST['direccion']);
            $contrasena = trim($_POST['contrasena']);

            $nombreArchivo = $_FILES['imagen']['name'];
            $tipoArchivo = $_FILES['imagen']['type'];
            $tamanoArchivo = $_FILES['imagen']['size'];
            $rutaArchivo = $_FILES['imagen']['tmp_name'];
        
            // Mover el archivo cargado a una ubicación permanente
            $rutaDestino = "./imagenes/" . $nombreArchivo;
            move_uploaded_file($rutaArchivo, $rutaDestino);

         // Verificar si se ha cargado una imagen
        if (strlen($nombreArchivo) <= 0) 
        {
        // Establecer ruta por defecto si no se ha cargado ninguna imagen
        $rutaDestino = "./imagenes/anonimo.png";
        }

        $consulta = "SELECT * FROM clientes WHERE nombre='$nombre' OR correo='$correo'";
        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) >= 1) 
        {
            ?>
            <div class="container">
                <h3 class="error">Usuario ya registrado</h3>
            </div>
            <script>
                setTimeout(function () 
                {
                document.querySelector(".error").remove();
                }, 1300); // Elimina el mensaje después de 2 segundos
            </script>
            <?php
             exit;
        } 
        else 
        {
        $consulta = "INSERT INTO clientes(nombre, contraseña, correo, direccion, imagen) VALUES ('$nombre','$contrasena','$correo','$direccion','$rutaDestino')";
        $resultado = mysqli_query($conexion, $consulta);}
        if ($resultado) 
        {
        ?>
        <?php
                echo "<script>window.location.replace('iniciar_sesion.php');</script>";
        }
        } 
        else 
        {
        ?>
        <div class="container">
            <h3 class="error">¡Por favor complete los campos!</h3>
            <script>
                setTimeout(function () {
                    document.querySelector(".error").remove();
                }, 1300); // Elimina el mensaje después de 2 segundos
            </script>
        </div>
        <?php
        }
    }
?>


