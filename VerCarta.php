<?php
include 'La-carta.php';
include 'headercarta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
  	 	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="basicos2.css"> <!-- Vinculamos el codigo CSS de la página -->
        <link rel="stylesheet" type="text/css" href="diseñocarrito.css"> <!-- Vinculamos el codigo CSS de la página -->

    	<title>Carrito</title>
        <style>
    .container{padding: 20px;}
    input[type="number"]{width: 20%;}
    </style>
	</head>	

    <script>
        function updateCartItem($id, $qty){
    // obtener el contenido actual del carrito
    $cart = $_SESSION['cart'];
    // actualizar la cantidad para el artículo especificado
    foreach ($cart as &$item) {
        if ($item['id'] == $id) {
            $item['qty'] = $qty;
            break;
        }
    }
    // guarda el contenido del carrito actualizado en la sesión
    $_SESSION['cart'] = $cart;
    echo 'ok';
    exit;
}

    </script>
</head>
<body>
<div class="panel-body">


    <h1 class="h1-carrito">Carrito de compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            <th>Eliminar</th>
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
            <td><?php echo 'EUROS '.$item["price"].'€'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo 'EUROS '.$item["subtotal"].'€'; ?></td>
            <td class="eliminar">
                <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>"  onclick="return confirm('Confirma eliminar?')">
                    <img src="imagenes/papelera.png" alt="Eliminar" title="Eliminar">
                </a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carito esta vacío, revisa si has añadido correctamente los productos...</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr class="foot">
            <td><a href="index.php" class="btn btn-warning">Continuar Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo 'EUROS '.$cart->total().'€'; ?></strong></td>
            <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos</a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    </div>

 </div>
 
</div>
<?php
  include("footer.php")
?>
</body>
</html>