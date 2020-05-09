<?php

$apellido = "vacio";
$usuario = "vacio";
if(isset($_POST['usuario'])){
    $variable = $_POST['usuario'];
}
if(isset($_POST['apellido'])){
    $apellido = $_POST['apellido'];
}
var_dump($apellido);
echo $apellido. ", ".$variable;
?>