<?php
require_once "about.php";
require_once "pi.php";
require_once "operandos.php";

$action = $_GET['action'];

$partesURL = explode("/", $action);

if($partesURL[0] == ''){
    //[""]
    echo about();
}elseif($partesURL[0] == 'pi'){
    //["pi"]
    echo valorPi();
}elseif($partesURL[0] == 'sumar'){
    // ["sumar","2","3"]
    echo sumar($partesURL[1], $partesURL[2]);
}elseif($partesURL[0] == 'about'){
    // ["about"]
    if(isset($partesURL[1])){
        echo about($partesURL[1]);    
    }else{
        echo about();
    }
    
}

?>