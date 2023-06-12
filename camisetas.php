<?php
  include("Configuracion.php");
  include("headerproductos.php");
 ?>
		<main> <!-- Creamos el contenido de la página -->
        <title>Camisetas</title>
        <h2 class="h2producto"><a href="termicas.php" class="titulo-cat-prod">Térmicas</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'camisetas-termicas' ORDER BY id ASC LIMIT 6");
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
                    <h2 class="h2producto"><a href="compresion.php" class="titulo-cat-prod">Compresión</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'camisetas-compresion' ORDER BY id ASC LIMIT 6");
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
                    <h2 class="h2producto"><a href="corta.php" class="titulo-cat-prod">Manga Corta</a></h2>
            <div class="productos">
                <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos WHERE categoria = 'camisetas-corta' ORDER BY id ASC LIMIT 6");
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
                    <?php
  include("footer.php")
?>
			</main>
		</body>
        <script src="./funciones.js"></script>
	</html>