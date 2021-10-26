<?php

function tieneespacios($str){
    $str = trim($str);
    if ($str !== '') {
        $pattern = '/^[a-zA-Z, ]*$/';
        if (!preg_match($pattern, $str)) {
            return true;   
        }
    }
    return false;   
}

include 'modelos/conexion.php';

include 'modelos/modelo_formulario.php';

if (isset($_GET['usuario']) && isset($_GET['clave'])){
	$us = $_GET['usuario'];
	$cl = $_GET['clave'];

	$_SESSION['usuario'] = $us;
	if(BD::comprobar($us,$cl)){

		header("location: home.php");
	}
}else if (isset($_GET['usuarior']) && isset($_GET['claver1']) && isset($_GET['claver2'])){
	$us = trim($_GET['usuarior']);
	$cl = $_GET['claver1'];
	$cl2 = $_GET['claver2'];
	if($cl !== $cl2){
	    echo 'Las contraseñas no coinciden';
	}else if($cl == "" || $us == ""){
	    echo 'Llena todos los campos';
	}else if(tieneespacios($us)){
	    echo 'El nombre de usuario solo admite texto de la Aa-Zz';
	}else if(BD::nuevo_usuario($us,$cl)){
		header("Refresh:0");
	}
}

include 'vistas/login.php';

?>