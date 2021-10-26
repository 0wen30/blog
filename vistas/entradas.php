	
	<?php foreach ($entradas as $entrada): ?>

	<div class="publicaciones">
		<div><?= $entrada['titulo'] ?></div>
		<div><?= $entrada['fecha'] ?></div>
		<div><?= $entrada['comentario'] ?></div>
		<div><img width="200px" src="<?= 'img/'.$entrada['imagen'] ?>"></div>
	</div>
		
	<?php endforeach; ?>
