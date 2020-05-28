<?php

function getTasks(){
    $db = new PDO('mysql:host=localhost;dbname=todolistapp;charset=utf8', 'root', '');
    $sentence = $db->prepare( "select * from task");
    $sentence->execute();
    return $sentence->fetchAll();
}

function createTask($title, $description){
    $db = new PDO('mysql:host=localhost;dbname=todolistapp;charset=utf8', 'root', '');
    $sentence = $db->prepare("INSERT INTO task(title,description) VALUES(?,?)");
    $sentence->execute(array($title, $description));
}
?>