<?php

require_once "TaskView.php";
require_once "TaskModel.php";

class TaskController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TaskView();
        $this->model = new TaskModel();

        session_start();

        if(!isset($_SESSION["nombre"])){ // si no esta logeado entonces llevalo a login
          header("Location: login");
          die();
        }else{ // si ya esta logeado verifica timeout
          if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000)) { 
            header("Location: logout");
            die();
          } 
          $_SESSION['LAST_ACTIVITY'] = time();
          echo $_SESSION['LAST_ACTIVITY'];
        }
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