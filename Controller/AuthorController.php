<?php

require_once 'Models/Author.php';
require_once 'Controller.php';

class AuthorController extends Controller {

    public function __construct() {
        $this->model = new Author;
    }

    public function index()
    {
        # die(__METHOD__);
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
        
        $title = 'Edit Author';
        if($id){
            $data = $this->model->find($id);
        } else{

        }
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
