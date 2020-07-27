<?php

class Controller {

    protected $model;
    protected $listTitle = 'Allgemeiner Titel';
    protected $showTitle = 'Allgemeiner Show Titel';

    private $viewKey;

    public function __construct()
    {
        $this->viewKey = strtolower(get_class($this->model));
    }

    public function index()
    {
        $title  = $this->listTitle;
        $list   = $this->model->all();
        require_once 'Views/'. $this->viewKey . '/index.php';
    }

    public function show($id)
    {
        $title  = $this->showTitle;
        $item = $this->model->find($id, true);
        require_once 'Views/' . $this->viewKey . '/show.php';
    }

}
?>
