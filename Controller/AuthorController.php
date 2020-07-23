<?php

require_once 'Models/Author.php';

class AuthorController {
<<<<<<< HEAD
    
=======

    /**
     * @var Author
     */
>>>>>>> master
    private $model;

    public function __construct() {
        $this->model = new Author;
    }

    public function index()
    {
<<<<<<< HEAD
        # die(__METHOD__);
        $authors    = $this->model->all();
        $title      = 'Autor';
=======
        $title      = 'Autoren';
        $authors    = $this->model->all();
>>>>>>> master
        require_once 'Views/authors.php';
    }

    public function show($id)
    {
        $title  = 'Autor';
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
