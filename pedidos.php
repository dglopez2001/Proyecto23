<?php
include("headerfuncionesadmin.php");
?>
<title>Pedidos</title>
<?php
$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];
$consulta = "SELECT id FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);
$row = mysqli_fetch_assoc($resultado);
$id = $row["id"];

// obtener detalles del cliente utilizando el ID del cliente en la sesión
$sql = "SELECT * FROM orden WHERE customer_id = '$id' ORDER BY created DESC";
$resultado2 = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado2) >= 1){
// Crear tabla HTML
echo "<table>";
echo "<tr><th>Id Pedido</th><th>Precio Total</th><th>Fecha Pedido</th><th>Estado</th></tr>";

// Mostrar resultados
while ($fila = mysqli_fetch_assoc($resultado2)) {
  echo "<tr>";
  echo "<td>{$fila['id']}</td>";
  echo "<td>{$fila['total_price']}</td>";
  echo "<td>{$fila['created']}</td>";
  echo "<td>{$fila['status']}</td>";
  echo "</tr>";
}

echo "</table>";

} else {
  echo'<div class="texto-centrado">';
  echo'<h3 class="pedidos">No has realizado ningún pedido todavia </h3>';
  echo'</div>';
}

// Cerrar conexión
mysqli_close($conexion);

include("footer.php");
?>
