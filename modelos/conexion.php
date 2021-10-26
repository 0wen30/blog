<?php 

class Conexion extends mysqli{

    public function __construct($host, $usuario, $contraseña, $bd) {
        parent::__construct($host, $usuario, $contraseña, $bd);

        if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}

?>