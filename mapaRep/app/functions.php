<?php

//Validar primero los errores y ejecutar la vista del positivo
function get_view($view_name){
    $view = VIEW.$view_name.'View.php';
    if(!is_file($view)) {
        die('La vista no existe');
    }
    //Requerir las vistas 
    require_once $view;
}
