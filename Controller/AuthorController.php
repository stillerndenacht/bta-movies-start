<?php

require_once 'Models/Author.php';

class AuthorController {

    private $model;

    public function __construct() {
        $this->model = new Author;
    }

    public function index()
    {
        require_once 'Pages/authors.php';
    }

    public function show($id)
    {
        require_once 'Pages/author.php';
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
