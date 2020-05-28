<?php

class ConfigApp{
    public static $ACTION = "action";
    public static $PARAMS = "params";
    public static $ACTIONS = [
        'home' => 'tasks',
        'insert' => 'insertTask',
        'delete' => 'deleteTask',
        'done' => 'completeTask',
        'show' => 'showTask',
    ];
}
?>