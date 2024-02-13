<?php
session_start();

//Definicion de un servidor para trabajar de manera local
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1', '::1']));

//La URL del proyecto
define('URL'    ,(IS_LOCAL ? 'https://127.0.0.1/8848/mapaRep' : 'LA URL DE SU SERVIDOR ES DE PRODUCCIÓN'));

//Rutas de las carpetas
define('DS'          , DIRECTORY_SEPARATOR);
define('ROOT'        , getcwd().DS);
define('APP'         , ROOT.'app'.DS);
define('ASSETS'      , ROOT.'assets'.DS);
define('TEMPLATES'   , ROOT.'templates'.DS);
define('INCLUDES'    , TEMPLATES.'includes'.DS);
define('STATES'      , TEMPLATES.'states'.DS);
define('VIEW'        , TEMPLATES.'views'.DS);
define('UPLOADS'     , ROOT.'uploads'.DS);

//Personalización del APP
define('APP_NAME', 'MAPA DE LA REPUBLICA');

//Mandar a llamar las funciones
require_once APP.'functions.php';

