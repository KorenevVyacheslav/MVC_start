<?php

session_start();

// подключаем файлы ядра
require_once 'core'. DIRECTORY_SEPARATOR . 'Model.php';          
require_once 'core'. DIRECTORY_SEPARATOR . 'View.php';
require_once 'core'. DIRECTORY_SEPARATOR . 'Controller.php';
require_once 'core'. DIRECTORY_SEPARATOR . 'Route.php';

define ('SIT', dirname (__DIR__, 1) . DIRECTORY_SEPARATOR);        //    W:\domains\Sit
define ('APP', SIT . 'app' . DIRECTORY_SEPARATOR);                 //    W:\domains\Sit\app
define ('VIEWS', APP . 'views' . DIRECTORY_SEPARATOR);             //    W:\domains\Sit\app\views\
define ('CONTROLLERS', APP . 'controllers' . DIRECTORY_SEPARATOR); //    W:\domains\Sit\app\controllers\
define ('MODELS', APP . 'models' . DIRECTORY_SEPARATOR);           //    W:\domains\Sit\app\models\

//'core'.DIRECTORY_SEPARATOR. 'Route'::start();   // запускаем маршрутизатор
Route::start();   // запускаем маршрутизатор





