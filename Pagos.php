<?php

include 'La-carta.php';
$cart = new Cart;
include 'headercarta.php';
// incluir el archivo de configuración de la base de datos
include 'Configuracion.php';

// redirigir a casa si el carrito está vacío
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// establecer ID de cliente en la sesión
$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];
$consulta = "SELECT id FROM clientes WHERE nombre='$nombre' AND correo='$correo'";
$resultado = mysqli_query($conexion, $consulta);
$row = mysqli_fetch_assoc($resultado);
$id = $row["id"];
$_SESSION['sessCustomerID'] = $id;

// obtener detalles del cliente por ID de cliente de sesión
$query = $db->query("SELECT * FROM clientes WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
  	 	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	 	<link rel="stylesheet" type="text/css" href="diseñopagos.css"> <!-- Vinculamos el codigo CSS de la página -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    	<title>Pagos</title>
</head>
<body>
<div class="panel-body">
    <h1 class="h1-pagos">Vista previa de la Orden</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Pricio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //obtener artículos del carrito de la sesión
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo 'EUR '.$item["price"].'€'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'EUR '.$item["subtotal"].'€'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carrito......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'EUR '.$cart->total().'€'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Detalles de envío</h4>
        <p><strong>Nombre: </strong> <?php echo $custRow['nombre']; ?></p>
        <p><strong>Correo: </strong><?php echo $custRow['correo']; ?></p>
        <p><strong>Dirección: </strong><?php echo $custRow['direccion']; ?></p>
        <p><strong>Telefono: </strong><?php echo $custRow['telefono']; ?></p>
    </div>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning contiBtn">Continue Comprando</a>
        <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido</a>
    </div>
        </div>
 
 </div>
</div>
<?php
  include("footer.php")
?>
</body>
</html>