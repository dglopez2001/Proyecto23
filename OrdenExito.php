<?php
include 'Configuracion.php';
include 'La-carta.php';
include 'headercarta.php';
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="diseñocarrito.css"> <!-- Vinculamos el codigo CSS de la página -->
 <link rel="stylesheet" type="text/css" href="basicos2.css"> <!-- Vinculamos el codigo CSS de la página -->
    <title>Exito</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 20px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="index.php" class="btn btn-warning">Inicio</a></li>
</ul>
</div>

<div class="panel-body">

    <h1>Estado de su Orden</h1>
    <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
           </div>
 </div><!--Cierra-->
</div>
<?php
  include("footer.php")
?>
</body>
</html>