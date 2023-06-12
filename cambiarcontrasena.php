<?php
    include("headercontraseña.php");
?>
    <title>Gestión Contraseña</title>
    <form method="post" class="cambiarcontraseña">
        <h1 class="cambiarcontraseña">Cambio de Contraseña</h1>
        <input type="password" class="primero cambiarcontraseña" name="contrasena_actual" placeholder="Contraseña Actual" required > <br><br>
        <input type="password" name="nueva_contrasena" placeholder="Contraseña Nueva" required class="cambiarcontraseña"> <br><br>
        <input type="password" name="nueva_contrasena_confirmacion" placeholder="Confirmar Contraseña Nueva" required class="cambiarcontraseña"> <br><br>
        <button type="submit" name="cambiar_contrasena" class="cambiarcontraseña">Cambiar Contraseña</button>
        <a href="perfil.php" class="cambiarcontraseña"><img src="imagenes\atras.png" alt="Volver" class="cambiarcontraseña"/></a>
    </form>
    <?php
  include("footer.php")
?>
  </body>
</html>

<?php
  // Validar la sesión
  if (!isset($_SESSION["nombre"])) 
    {
      header("Location: iniciar_sesion.php");
      exit;
    }

  // Procesar el formulario de cambio de contraseña
  if (isset($_POST["cambiar_contrasena"])) 
    {
      $contrasena_actual = $_POST["contrasena_actual"];
      $nueva_contrasena = $_POST["nueva_contrasena"];
      $nueva_contrasena_confirmacion = $_POST["nueva_contrasena_confirmacion"];

      // Validar que la nueva contraseña y su original no coincidan
      if ($nueva_contrasena == $contrasena_actual) 
        {
           echo "<p class='error'>La contraseña nueva es igual a la actual</p>";
?>
  <script>
    setTimeout(function() 
      {
        document.querySelector(".error").remove();
          }, 1300); // Elimina el mensaje después de 2 segundo
    </script>
<?php
  exit;
  }

  // Validar que la nueva contraseña y su confirmación coincidan
  if ($nueva_contrasena !== $nueva_contrasena_confirmacion) {
    echo "<p class='error'>Las contraseñas nuevas no coinciden</p>";
?>
  <script>
    setTimeout(function() 
      {
        document.querySelector(".error").remove();
      }, 1300); // Elimina el mensaje después de 2 segundo
  </script>
<?php
   exit;
  }

    // Validar que la nueva contraseña y su confirmación coincidan
    if ($nueva_contrasena == $contrasena_actual && $nueva_contrasena !== $nueva_contrasena_confirmacion) {
      echo "<p class='error'>Las contraseñas son iguales</p>";
  ?>
    <script>
      setTimeout(function() 
        {
          document.querySelector(".error").remove();
        }, 1300); // Elimina el mensaje después de 2 segundo
    </script>
  <?php
     exit;
    }

  // Validar la contraseña actual
  $correo = $_SESSION["correo"];
  $consulta = "SELECT * FROM clientes WHERE nombre='$nombre' AND contraseña='$contrasena_actual' AND correo='$correo'";
  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) == 1) {
  // Actualizar la contraseña del usuario en la base de datos
  $consulta = "UPDATE clientes SET contraseña='$nueva_contrasena' WHERE nombre='$nombre' AND correo='$correo'";
  mysqli_query($conexion, $consulta);
  echo "<p class='correcto'>Contraseña actualizada correctamente</p>";
?>
  <script>
    setTimeout(function() 
    {
      document.querySelector(".correcto").remove();
    }, 700); // Elimina el mensaje después de 0.7 segundo
  </script>
<?php
        echo "<script>window.location.replace('./perfil.php');</script>";
      } 
  else 
    {
      echo "<p class='error'>La contraseña actual ingresada es incorrecta</p>";
?>
  <script>
    setTimeout(function() 
    {
      document.querySelector(".error").remove();
    }, 1300); // Elimina el mensaje después de 2 segundo
  </script>
<?php
  }
    }
?>
