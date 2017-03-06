<?php
/**
 * Load model
 * @param  [type] $className [description]
 * @return [type]            [description]
 */
function autoloadModel($className) {
    $filename = "models/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

/**
 * Load controller
 * @param  [type] $className [description]
 * @return [type]            [description]
 */
function autoloadController($className) {
    $filename = "controllers/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");

function call($controller, $action)
{
    require_once 'controllers/' . $controller . '_controller.php';

    switch ($controller) {
        case 'persons':
        
            $controller = new PersonsController();
            break;
        case 'category':
        
            $controller = new CategoryController();
            break;
        case 'new':
            $controller = new NewController();
            break;

    }

    $controller->{$action}();
}

// we're adding an entry for the new controller and its actions
$controllers = array(
    'persons'  => ['index', 'show', 'edit', 'update', 'destroy'],
    'category' => ['index', 'show', 'create', 'store','edit', 'update', 'destroy', 'pagnitate'],
    'new'      => ['index', 'show', 'create', 'store','edit', 'update', 'destroy'],
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        echo ('Something went wrong');
    }
} else {
    echo ('Something went wrong');
}
