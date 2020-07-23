<?php

require_once 'Models/Author.php';

class AuthorController {

    /**
     * @var Author
     */
    private $model;

    public function __construct() {
        $this->model = new Author;
    }

    public function index()
    {
        $title      = 'Autoren';
        $authors    = $this->model->all();
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
        $title = 'Edit Autor';
        if( $id ) {
            // existierender author
            $data = $this->model->find($id);
        } else {
            // neuer author
        }
        require_once 'Views/Forms/author.php';
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
