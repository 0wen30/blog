<?php

class BD extends Conexion{

	static public $conexion;

	private static function conectar(){
		//self::$conexion = new Conexion("localhost","root","santos","blog");
		self::$conexion = new Conexion(
			"x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
			"zo1w3nepkh8x65p6",
			"e4lozg0p67ffn9nq",
			"qztw2qpta7uh9g0p"
		);
		
	}

	private static function cerrar(){
		self::$conexion->close();
	}

	static function nuevo_usuario($u, $c){

		BD::conectar();

		$consulta = "insert into usuarios (usuario, clave) values(?, ?)";

		$sentencia = self::$conexion->prepare($consulta);

		$sentencia->bind_param('ss', $u, $c);

		$sentencia->execute();

		$seSubio = $sentencia->affected_rows > 0;

		$sentencia->close();

		BD::cerrar();

		return $seSubio;

	}

	static function comprobar($u, $c){

		BD::conectar();

		$consulta = "SELECT count(*) FROM usuarios where usuario = ? and clave = ?";

		$sentencia = self::$conexion->prepare($consulta);

		$sentencia->bind_param('ss', $u, $c);

		$sentencia->execute();

		$sentencia->bind_result($encontrado);

		while($sentencia->fetch()){}

		$sentencia->close();

		BD::cerrar();

		return (boolean) $encontrado;

	}

	static function cargar($df){

		BD::conectar();

		$insertar = "INSERT INTO contenido (usuario,titulo,fecha,comentario,imagen) VALUES ('$df[0]','$df[1]','$df[2]','$df[3]','$df[4]')";

		$resultado = self::$conexion->query($insertar);

		$seSubio = self::$conexion->affected_rows > 0;

		BD::cerrar();

		return $seSubio;
	}

	static function mostrar($us){

		BD::conectar();

		$consulta = "SELECT titulo,fecha,comentario,imagen FROM contenido WHERE usuario = '$us' ORDER BY fecha;";

		$resultado = self::$conexion->query($consulta);

		$entradas = [];
		
		foreach ($resultado as $val) {
			$entradas[] = $val;
		}

		BD::cerrar();

		return $entradas;

	}

	static function mostrartodo(){

		BD::conectar();

		$consulta = "SELECT usuario,titulo,fecha,comentario,imagen FROM contenido ORDER BY fecha DESC;";

		$resultado = self::$conexion->query($consulta);

		$entradas = [];
		
		foreach ($resultado as $val) {
			$entradas[] = $val;
		}

		BD::cerrar();

		return $entradas;

	}

}

?>
