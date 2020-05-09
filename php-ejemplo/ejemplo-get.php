<?php

$apellido = "vacio";
$usuario = "vacio";
if(isset($_GET['usuario'])){
    $variable = $_GET['usuario'];
}
if(isset($_GET['apellido'])){
    $apellido = $_GET['apellido'];
}

echo $apellido. ", ".$variable;
?>