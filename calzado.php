<?php
  include("Configuracion.php");
  include("headerproductos.php");
?>
		<main> <!-- Creamos el contenido de la página -->
        <title>Calzados</title>
        <h2 class="h2producto"><a href="bota.php" class="titulo-cat-prod">Botas</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'calzado-bota' ORDER BY id ASC LIMIT 6");
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
                    <h2 class="h2producto"><a href="sandalia.php" class="titulo-cat-prod">Trekking </a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'calzado-sandalia' ORDER BY id ASC LIMIT 6");
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
                    <h2 class="h2producto"><a href="running.php" class="titulo-cat-prod">Deportivas</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'calzado-running' ORDER BY id ASC LIMIT 6");
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
                                <p>
                                    <?php if($row["discount"] > 0) { ?>
                                        <span class="precio-descuento"><?php echo 'EUR '.($row["discount"]).'€'; ?></span>  
                                        <span class="precio-original2"><?php echo 'EUR '.$row["price"].'€'; ?></span>
                                    <?php } else { ?>
                                        <span class="precio-original"><?php echo 'EUR '.$row["price"].'€'; ?></span>
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
