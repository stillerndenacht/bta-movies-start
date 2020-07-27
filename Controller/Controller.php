<?php 

class Controller {

   protected $model;

}

?>
<?php

class Controller {

    protected $model;
    protected $listTitle;
    protected $listView;

    public function index()
    {
        $title  = $this->listTitle;
        $list   = $this->model->all();
        require_once $this->listView;
    }

}
?>
