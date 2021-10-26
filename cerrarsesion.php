<?php
include "crearSesion.php";
session_destroy();
header("location:index.php");
?>