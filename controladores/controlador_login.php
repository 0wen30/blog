<?php

include 'modelos/conexion.php';

include 'modelos/modelo_formulario.php';

if (isset($_GET['usuario']) && isset($_GET['clave'])){
	$us = $_GET['usuario'];
	$cl = $_GET['clave'];

/*--------------------------------------------------
	if(Consultas::estaRegistrado($_POST['user'])){
		    echo 'El usuario ya esta registrado';
		}else if($_POST['pass'] !== $_POST['confirm']){
		    echo 'Las contraseñas no coinciden';
		}else if($_POST['pass'] == "" || $_POST['user'] == ""){
		    echo 'Llena todos los campos';
		}else if(tieneespacios($_POST['user'])){
		    echo 'El nombre de usuario solo admite texto';
		}else{
		    Consultas::registrar($_POST['user'],$_POST['pass']);
		    echo 'Registro realizado';
		}

		function tieneespacios($str){
		    $str = trim($str);
		    if ($str !== '') {
		        $pattern = '/^[a-zA-Z, ]*$/';
		        if (preg_match($pattern, $str)) {
		            return true;   
		        }
		    }
		    return false;   
		}
	--------------------------------------------------*/

	$_SESSION['usuario'] = $us;
	if(BD::comprobar($us,$cl)){

		header("location: home.php");
	}
}else if (isset($_GET['usuarior']) && isset($_GET['claver1']) && isset($_GET['claver2'])){
	$us = $_GET['usuarior'];
	$cl = $_GET['claver1'];
	if(BD::nuevo_usuario($us,$cl)){
		header("Refresh:0");
	}
}

include 'vistas/login.php';

?>