<?php

class Controller {

    protected $model;
    protected $listTitle = 'Allgemeiner Titel';


    public function index()
    {
        $viewName = strtolower( get_class($this->model) );
        $title  = $this->listTitle;
        $list   = $this->model->all();
        
        require_once 'Views/'. $viewName . '/index.php';
    }

}
?>
