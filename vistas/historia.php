
	<?php foreach ($todaslasentradas as $entrada): ?>

	<section class="publicaciones">
		<div>Publicado por <?= $entrada['usuario'] ?></div>
		<div><?= $entrada['titulo'] ?></div>
		<div><?= $entrada['fecha'] ?></div>	
		<div><?= $entrada['comentario'] ?></div>
		<div><img width="200px" src="<?= 'img/'.$entrada['imagen'] ?>"></div>
	</section>
		
	<?php endforeach; ?>