<?php

function sumar($arrayParams){
    $a = $arrayParams[0];
    $b = $arrayParams[1];

    $resultado = $a + $b;
    return "La suma de $a + $b es: $resultado";
}

function restar($arrayParams){
    $a = $arrayParams[0];
    $b = $arrayParams[1];
    
    $resultado = $a - $b;
    return "La suma de $a - $b es: $resultado";
}

?>