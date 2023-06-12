<?php
include 'Configuracion.php';
include 'headerprincipal.php';
?>
        <title>Inicio</title>
        <main>
      <section class="banner">
        <h1>Bienvenido</h1>
        <p>Compra productos de alta calidad a precios bajos.</p>
        <a href="./productos.php">Ver Productos</a>
      </section>
      <h2 class="h2producto">Productos Destacados</h2>
      <div class="productos">
        <?php
            //Consulta
            $query = $db->query("SELECT * FROM mis_productos WHERE id > 0 ORDER BY stock LIMIT 12");
            if($query->num_rows > 0){ 
                while($row = $query->fetch_assoc()){
            ?>  
             <div class="producto">
             <h4><?php echo $row["name"]; ?></h4><br>
                        <p><img src="<?php echo $row["imagen"]; ?>"></p>
                        <div class="contenedor-productos">
                        <p>
                            <select name="talla" id="talla">
            <?php
                $tallas = explode(" ", $row["talla"]);
                foreach ($tallas as $talla) {
                ?>
                    <option value="<?php echo $talla; ?>"><?php echo $talla; ?></option>
                    <?php
                }
            ?>
                            </select>
                          
                        </p>    
                        <p>
                            <?php if($row["discount"] > 0) { ?>
                                <span class="precio-descuento"><?php echo 'EUR '.($row["discount"]).'€'; ?></span>  
                                <span class="precio-original2"><?php echo 'EUR '.$row["price"].'€'; ?></span>
                            <?php } else { ?>
                                <span class="precio-original"><?php echo 'EUR '.$row["price"].'€'; ?></span>
                            <?php } ?>
                            </p> 
 
                        <a href="#" id="popupcarrito" class="agregar-carrito" data-id="<?php echo $row["id"]; ?>">Agregar al Carrito</a>
                        <div id="miPopUp" class="pop-up">
                        <div class="contenido-popup">
                          <p>¡Agregado Correctamente!</p>
                        </div>
                      </div>
                    </div>
                            </div>          
            <?php 
                    } 
                } else { 
            ?>
                    <p>Producto(s) no existe.....</p>
            <?php 
                } 
            ?>
            </div>
            <section>
            <div class="contenedor-btn">
                <a href="productos.php" class="btn-productos">Ver Más</a>
            </div>
        <div class="galeria">
        <img src="./imagen1.jpg">        
        <img src="./imagen2.jpg">
        <img src="./imagen3.jpg">
        <img src="./imagen4.jpg">
        <img src="./imagen5.jpg">
        </div>
	   </section><br>
        <div class="titulo-productos2">
                <h2 >Ultimas Unidades</h2>
        </div>
        <div class="productos">
        <?php
    //get rows query
    $query = $db->query("SELECT * FROM mis_productos WHERE stock > 0 AND stock < 100 ORDER BY stock ASC LIMIT 6");
        if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){
            ?>  
                    <div class="producto">
                        <h4><?php echo $row["name"]; ?></h4><br>
                        <p><img src="<?php echo $row["imagen"]; ?>"></p>
                        <p class="unidades"><?php echo 'Unidades: ' . $row["stock"]; ?></p>
                        <p>
                            <select name="talla" id="talla">
            <?php
                $tallas = explode(" ", $row["talla"]);
                foreach ($tallas as $talla) {
                ?>
                    <option value="<?php echo $talla; ?>"><?php echo $talla; ?></option>
                    <?php
                }
            ?>
                            </select>
                          
                        </p>    
                        <p>
                            <?php if($row["discount"] > 0) { ?>
                                <span class="precio-descuento"><?php echo 'EUR '.($row["discount"]).'€'; ?></span>  
                                <span class="precio-original2"><?php echo 'EUR '.$row["price"].'€'; ?></span>
                            <?php } else { ?>
                                <span class="precio-original"><?php echo 'EUR '.$row["price"].'€'; ?></span>
                            <?php } ?>
                        </p>      
                        <a href="#" class="agregar-carrito" data-id="<?php echo $row["id"]; ?>">Agregar al Carrito</a>
                        <div id="miPopUp" class="pop-up">
                        <div class="contenido-popup">
                          <p>¡Agregado Correctamente!</p>
                        </div>
                      </div>
                    </div>
            <?php 
                    } 
                } else { 
            ?>
                    <p>Producto(s) no existe.....</p>
            <?php 
                } 
            ?>
            </div>
        <div class="espacio"></div>
        <?php include("footer.php");?>
    </main>
    </div>

    <script src="./funciones.js"></script>
</body>
</html>