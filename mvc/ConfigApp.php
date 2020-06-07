<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        'home' => 'TaskController#tasks',
        'insert' => 'TaskController#insertTask',
        'delete' => 'TaskController#deleteTask',
        'done' => 'TaskController#completeTask',
        'show' => 'TaskController#showTask',
    ];
}
?>