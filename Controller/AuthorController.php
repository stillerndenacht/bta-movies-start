<?php

require_once 'Models/Author.php';

class AuthorController {
    
    private $model;

    public function __construct() {
        $this->model = new Author;
    }

    public function index()
    {
        # die(__METHOD__);
        $authors    = $this->model->all();
        $title      = 'Autor';
        require_once 'Views/authors.php';
    }

    public function show($id)
    {
//        die(__METHOD__ . ' ID: ' . ($id ?: 'null'));
        $title = 'Autor';
        $author = $this->model->find($id, true);
        require_once 'Views/author.php';
    }

    public function edit($id = null)
    {
        die(__METHOD__ .' ID: ' . ($id ?: 'null') );
    }

    public function store($id = null)
    {
        die(__METHOD__ . ' ID: ' . ($id ?: 'null') );
    }

    public function delete($id)
    {
        die(__METHOD__ . ' ID: ' . $id);
    }
}
?>
