<?php
include("headerfuncionesadmin.php");
?>
<title>Ver Productos</title>
<?php
$consulta = "SELECT rol FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) >= 1) {
  $row = mysqli_fetch_assoc($resultado);
  $rol = $row["rol"];

  if ($rol == 'administrador') {

    // Verificar si se ha enviado el formulario de filtrado
    if (isset($_POST['enviar'])) {
      // Obtener los valores del formulario de filtrado
      
      $id = $_POST['id'];
      $nombre = $_POST['name'];
      $categoria = $_POST['categoria'];
      $precio = $_POST['price'];
      $discount = $_POST['discount'];
      $created = $_POST['created'];
      $modified = $_POST['modified'];
      $stock = $_POST['stock'];

      // Construir la consulta SQL con los valores de filtrado
      $sql = "SELECT * FROM mis_productos WHERE 1=1";

      if (!empty($id)) {
        $sql .= " AND id like '$id'";
      }

      if (!empty($nombre)) {
        $sql .= " AND name LIKE '$nombre'";
      }

      if (!empty($categoria)) {
        $sql .= " AND categoria LIKE '$categoria'";
      }

      if (!empty($precio)) {
        $sql .= " AND price >= $precio";
      }

      if (!empty($discount)) {
        $sql .= " AND discount >= $discount";
      }

      if (!empty($created)) {
        $sql .= " AND created like '$created'";
      }

      if (!empty($modified)) {
        $sql .= " AND modified like '$modified'";
      }

      if (!empty($stock)) {
        $sql .= " AND stock = '$stock'";
      }

      // Ejecutar la consulta con los filtros aplicados
      $resultado = mysqli_query($conexion, $sql);
    } else {
      // Consulta SQL sin filtros
      $sql = "SELECT * FROM mis_productos";

      // Ejecutar consulta
      $resultado = mysqli_query($conexion, $sql);
    }

    if (isset($_POST['reset'])) {
      $sql = "SELECT * FROM mis_productos";
      $resultado = mysqli_query($conexion, $sql);
    }

    // Crear formulario de filtrado
    echo '<h3 class="form-title">Selecciona los filtros:</h3><br>';
    echo '<form method="POST" class="form-inline">';
    echo '<input type="text" placeholder="Id" name="id" class="form-input"><br>';
    echo '<input type="text" placeholder="Nombre" name="name" class="form-input"><br>';
    echo '<input type="number" placeholder="Precio" name="price" class="form-input"><br>';
    echo '<input type="number" placeholder="Descuento" name="discount" class="form-input"><br>';
    echo '<input type="text" placeholder="Fecha Creación" name="created" class="form-input"><br>';
    echo '<input type="text" placeholder="Fecha Modificación" name="modified" class="form-input"><br>';
    echo '<input type="text" placeholder="Categoria" name="categoria" class="form-input"><br>';
    echo '<input type="text" placeholder="Stock" name="stock" class="form-input"><br>';
    echo '<input type="submit" value="Filtrar" name="enviar" class="form-submit">';
    echo '<input type="submit" value="Restablecer" name="reset" class="form-submit">';
    echo '</form>';
    

    // Crear tabla HTML
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Descuento</th><th>Creado</th><th>Modificado</th><th>Categoría</th><th>Talla</th><th>Imagen</th><th>Stock</th></tr>";

    // Mostrar resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
      echo "<tr>";
      echo "<td>{$fila['id']}</td>";
      echo "<td>{$fila['name']}</td>";
      echo "<td>{$fila['price']}</td>";
      echo "<td>{$fila['discount']}</td>";
      echo "<td>{$fila['created']}</td>";
      echo "<td>{$fila['modified']}</td>";
      echo "<td>{$fila['categoria']}</td>";
      echo "<td>{$fila['talla']}</td>";
      echo "<td>{$fila['imagen']}</td>";
      echo "<td>{$fila['stock']}</td>";
      echo "</tr>";
    }
    echo "</table>";

    // Cerrar conexión
    mysqli_close($conexion);
  } else {
    // Si el usuario no es un administrador, redirigir a la página de inicio
    header("Location: ./index.php");
  }
} else {
  // Si no se encontró el usuario, redirigir a la página de inicio
  header("Location: ./index.php");
}

include("footer.php");
?>
