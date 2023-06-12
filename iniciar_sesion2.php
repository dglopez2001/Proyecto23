<?php 
  include("Configuracion.php");
  if (isset($_POST['Iniciar'])) 
    {
      if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1) 
        {
          $_SESSION["nombre"] = $_POST["nombre"];
          $_SESSION["correo"] = $_POST["correo"];
          $_SESSION["contrasena"] = $_POST["contrasena"];
          $nombre = trim($_POST['nombre']);
          $contrasena = trim($_POST['contrasena']);
          $correo = trim($_POST['correo']);
          $fechareg = date("d/m/y");
          $consulta = "SELECT * FROM clientes WHERE nombre='$nombre' AND contraseña='$contrasena' AND correo='$correo'";
          $resultado = mysqli_query($conexion,$consulta);

          if (mysqli_num_rows($resultado) >= 1) {
            echo "<script>window.location.replace('index.php');</script>";
          } 
          else 
          {
            ?> 
              <div class="container">
                <h3 class="error" >Datos erroneos o Usuario no registrado</h3>
                <script>
                  setTimeout(function() 
                  {
                    document.querySelector(".error").remove();
                  }, 1300); // Elimina el mensaje después de 2 segundo
                </script>
              </div>
            <?php   
                  
          }
        } 
      else 
        {
          ?> 
            <div class="container">
              <h3 class="error">¡Por favor complete los campos!</h3>
              <script>
                    setTimeout(function() 
                    {
                      document.querySelector(".error").remove();
                    }, 1300); // Elimina el mensaje después de 2 segundo
              </script>
            </div>
          <?php
        }
    }
?>

