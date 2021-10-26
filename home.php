<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
	header("location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
	<?php

		include 'controladores/controlador_formulario.php';
		
	?>
</body>
</html>	