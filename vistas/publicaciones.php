<a href="cerrarsesion.php" class="myButton">Cerrar sesion</a>

<div id="home">

	<section>
		<img src="img/gris.png">
		<p><?= $_SESSION['usuario'] ?></p>
	</section>

	<section>
		<div>
			<form method="post" enctype="multipart/form-data">
				<input placeholder="Titulo" type="text" name="campo_titulo">
				<textarea placeholder="comentarios" name="area_comentarios"></textarea>
				<input type="file" name="imagen">
				<button class="boton" type="submit">enviar</button>
			</form>
		</div>
		
		<div>
			<?php 
				if (isset($entradas)) {
					include 'vistas/entradas.php';	
				}
			?>
		</div>
	</section>
		
	<section>
		<?php
			if (isset($entradas)) {
				include 'vistas/historia.php';	
			}
		?>
	</section>

</div>