<?php

require_once "TaskView.php";
require_once "TaskModel.php";

class TaskController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TaskView();
        $this->model = new TaskModel();
    }

    function showTask($params){
        $task = $this->model->getTask($params[0]);
        $this->view->showTask($task);
    }

    function tasks(){
        $tasks = $this->model->getTasks();
        $this->view->tasks($tasks);
    }

    function insertTask(){
        $this->model->createTask($_GET["title"], $_GET["description"]);
        header("Location: home");
      }
      
      function deleteTask($params){
        $this->model->removeTask($params[0]);
        header("Location: ../home");
      }
      
      function completeTask($params){
        $this->model->markTaskAsDone($params[0]);
        header("Location: ../home");
      }

}


?>