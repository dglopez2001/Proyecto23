<!-- Mostrar para el usuario logeado -->
<?php
  include("headercategorias.php");
  ?>
  <title>Catalogo</title>
		<main> <!-- Creamos el contenido de la página -->
			<h2 class="h2producto">Categorías</h2>
            <div class="contenedor-productos">
                <section class="productos">
                    <div class="producto">
                        <h3>Abrigos</h3>
                        <img src="abrigos\1.png" alt="Abrigos">
                        <p></p>
                        <a href="./abrigos.php" class="btn-productos">Ver más</a>
                    </div>
                    <div class="producto">
                       <h3>Chaquetas</h3>
                        <img src="chaquetas\1.png" alt="Chaquetas">
                        <p></p>
                        <a href="./chaquetas.php" class="btn-productos">Ver más</a>
                    </div>
                    <div class="producto">
                        <h3>Camisetas</h3>
                        <img src="camisetas\1.png" alt="Camisetas">
                        <p></p>
                        <a href="./camisetas.php" class="btn-productos">Ver más</a>
                    </div>
                    <div class="producto">
                        <h3>Pantalones</h3>
                        <img src="pantalones\1.png" alt="Pantalones">
                        <p></p>
                        <a href="./pantalones.php" class="btn-productos">Ver más</a>
                    </div>
                    <div class="producto">
                        <h3>Calzado</h3>
                        <img src="calzado\1.png" alt="calzado">
                        <p></p>
                        <a href="./calzado.php" class="btn-productos">Ver más</a>
                    </div>
                    <div class="producto">
                        <h3>Otros</h3>
                        <img src="otros\1.png" alt="otros">
                        <p></p>
                        <a href="./otros.php" class="btn-productos">Ver más</a>
                    </div>

	
                </div>
            </section>
		</main>
    <?php
  include("footer.php")
?>
	</body>
</html>