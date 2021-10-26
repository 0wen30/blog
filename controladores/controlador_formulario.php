<?php

include 'modelos/conexion.php';

include 'modelos/modelo_formulario.php';

$entradas = BD::mostrar($_SESSION['usuario']);

$todaslasentradas = BD::mostrartodo();

if (isset($_POST['campo_titulo'])) {

	echo $_FILES['imagen']['tmp_name'];

	move_uploaded_file($_FILES['imagen']['tmp_name'], "img/".$_FILES['imagen']['name']);

	$df = [
		$_SESSION['usuario'],
		$_POST['campo_titulo'],
		date('Y-m-d'),
		$_POST['area_comentarios'],
		$_FILES['imagen']['name']
	];

	if (BD::cargar($df)) {
		header("location: home.php");
	}
}

include 'vistas/publicaciones.php';

?>