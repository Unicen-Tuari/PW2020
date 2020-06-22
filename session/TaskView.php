<?php

require_once('libs/Smarty.class.php');

class TaskView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function showTask($task){
        $this->smarty->assign('task',$task);
        $this->smarty->display('templates/task.tpl');
    }

    function tasks($tasks){
        $this->smarty->assign('tasks',$tasks);
        $this->smarty->display('templates/index.tpl');
    }
    
}

?>