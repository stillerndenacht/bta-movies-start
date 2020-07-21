<?php
$controller = null;
$action = null;
$id = null;

if(isset($_REQUEST['controller'])) {

    switch($_REQUEST['controller']) {
        case 'authors':
            require_once 'Controller/AuthorController.php';
            $controller = new AuthorController;
            break;
        case 'movies':
            // @todo: implement movie logic 
            break;
    }

    if( $controller && isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];

        if(method_exists($controller, $action)) {

            if (isset($_REQUEST['id']) && (int) $_REQUEST['id'] > 0 ) {
                $controller->$action( (int) $_REQUEST['id']);
            } else {
                $controller->$action();
            }
        }
    }
} else {
    echo 'Keine gültige Aktion!';
}
?>
