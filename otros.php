<?php
  include("Configuracion.php");
  include("headerproductos.php");
  ?>
        <title>Otros</title>
		<main>	<!-- Creamos el contenido de la página -->
        <h2 class="h2producto"><a href="mochilas.php" class="titulo-cat-prod">Mochilas</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'otros-mochila' ORDER BY id ASC LIMIT 6");
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
                                        <span class="precio-descuento"><?php echo 'EUROS '.($row["discount"]).'€'; ?></span>  
                                        <span class="precio-original2"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } else { ?>
                                        <span class="precio-original"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } ?>
                        </p>    
                        <a href="#" id="popupcarrito" class="agregar-carrito" data-id="<?php echo $row["id"]; ?>">Añadir al Carrito</a>
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
                    <h2 class="h2producto"><a href="gorros.php" class="titulo-cat-prod">Gorros</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'otros-gorro' ORDER BY id ASC LIMIT 6");
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
                                        <span class="precio-descuento"><?php echo 'EUROS '.($row["discount"]).'€'; ?></span>  
                                        <span class="precio-original2"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } else { ?>
                                        <span class="precio-original"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } ?>
                        </p>    
                        <a href="#" id="popupcarrito" class="agregar-carrito" data-id="<?php echo $row["id"]; ?>">Añadir al Carrito</a>
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
                    <h2 class="h2producto"><a href="guantes.php" class="titulo-cat-prod">Guantes</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'otros-guantes' ORDER BY id ASC LIMIT 6");
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
                                        <span class="precio-descuento"><?php echo 'EUROS '.($row["discount"]).'€'; ?></span>  
                                        <span class="precio-original2"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } else { ?>
                                        <span class="precio-original"><?php echo 'EUROS '.$row["price"].'€'; ?></span>
                                    <?php } ?> 
                        </p>    
                        <a href="#" id="popupcarrito" class="agregar-carrito" data-id="<?php echo $row["id"]; ?>">Añadir al Carrito</a>
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
		</main>
    <?php
  include("footer.php")
?>
	</body>
    <script src="./funciones.js"></script>
</html>
