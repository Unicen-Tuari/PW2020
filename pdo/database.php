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

function removeTask($id_task){
    $db = new PDO('mysql:host=localhost;dbname=todolistapp;charset=utf8', 'root', '');
    $sentence = $db->prepare("DELETE FROM task WHERE id_task=?");
    $sentence->execute(array($id_task));
}
?>