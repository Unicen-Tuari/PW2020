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
        'login' => 'UsuariosController#login',
        'registrarse' => 'UsuariosController#registrarse',
        'registro' => 'UsuariosController#registro',
        'ingresar' => 'UsuariosController#ingresar',
        'logout' => 'UsuariosController#logout'
    ];
}
?>