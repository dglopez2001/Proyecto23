<?php
  include("headercontacto.php");
?>
        <title>Contacto</title>
		<main> <!-- Creamos el contenido de la página -->
			<section id="contacto" class="contacto">	<!-- Contenido de la página "Contacto" -->
				<div class="container">
				<h2 class="h2-contacto">Contacto</h2>
                <form method='POST' action='./enviar.php' class="form-contacto">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name='nombre' id="nombre" placeholder="nombre...">
                </div>
                <div class="form-group">
                    <label for="email">Tu Correo</label>
                    <input type="email" class="form-control" name='email' id="email" placeholder="email...">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Mensaje</label>
                    <textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="checkbox" required> Acepto la política de privacidad.
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
			</section>
		</main>
		<?php
  include("footer.php")
?>
    </body>
</html>
