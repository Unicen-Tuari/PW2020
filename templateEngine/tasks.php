
<?php
require_once('database.php');
require_once('libs/Smarty.class.php');

function tasks($member = null){
    $tasks = getTasks();
    $smarty = new Smarty();
    // $smarty->caching = true;
    // $smarty->cache_lifetime = 10;
    $smarty->assign('tasks',$tasks);
    $smarty->display('templates/index.tpl');
}

function insertTask(){
  createTask($_GET["title"], $_GET["description"]);
  header("Location: home");
}

function deleteTask($params){
  removeTask($params[0]);
  header("Location: ../home");
}

function completeTask($params){
  markTaskAsDone($params[0]);
  header("Location: ../home");
}

function showTask($params){
    $task = getTask($params[0]);
    $smarty = new Smarty();
    $smarty->assign('task',$task);
    $smarty->display('templates/task.tpl');
}
?>