<?php
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'Configuracion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM mis_productos WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $price = ($row['discount'] > '0') ? $row['discount'] : $row['price'];
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $price,
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'index.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: VerCarta.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orden (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if ($insertOrder) {
            $orderID = $db->insert_id;
            $sql = '';
            $sql2 = '';
            
            // obtener elementos del carrito
            $cartItems = $cart->contents();
            foreach ($cartItems as $item) {
                $qty2 = $item["qty"];
                $name2 = $item["name"];
        
                // Insertar elementos del pedido en la tabla 'orden_articulos'
                $sql .= "INSERT INTO orden_articulos (order_id, product_id, quantity) VALUES ('$orderID', '{$item['id']}', '{$item['qty']}');";
        
                // Actualizar el stock en la tabla 'mis_productos'
                $sql2 .= "UPDATE mis_productos SET stock = stock - $qty2 WHERE name LIKE '$name2';";
            }
        
            // insertar elementos del pedido en la base de datos
            $insertOrderItems = $db->multi_query($sql);
            while ($db->next_result()) {} // avanzar al siguiente resultado y liberar los resultados pendientes
        
            // ejecutar consulta de actualización del stock
            $UpdateOrderItems = $db->multi_query($sql2);
            while ($db->next_result()) {} // avanzar al siguiente resultado y liberar los resultados pendientes
        
            if ($insertOrderItems && $UpdateOrderItems) {
                $cart->destroy();
                header("Location: OrdenExito.php?id=$orderID");
            } else {
                echo "Error al insertar elementos del pedido o al actualizar el stock en la base de datos.";
            }
        
        }else{
            header("Location: Pagos.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}