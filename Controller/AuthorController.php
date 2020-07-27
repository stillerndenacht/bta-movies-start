<?php

require_once 'Controller.php';
require_once 'Models/Author.php';


class AuthorController extends Controller {

    protected $listTitle = 'Autoren';
    protected $showTitle = 'Autor';

    public function __construct() {
        $this->model = new Author;
        parent::__construct();
    }
/*
    public function show($id)
    {
        $title  = 'Autor';
        $author = $this->model->find($id, true);
        require_once 'Views/author.php';
    }
*/
    public function edit($id = null)
    {
        
        $title = 'Edit Author';
        if($id){
            $data = $this->model->find($id);
        } else{

        }
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

        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        
        if($id > 0) {
            $sql = 'UPDATE authors SET firstname = :firstname, lastname = :lastname 
                WHERE id = :id';
            $params = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'id'        => $id
            ];
            $stmt = $this->model->prepare($sql);
            $stmt->execute($params);
            header('location: /authors');
        }else{
            $params = [
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            ];
        }

    }

    public function delete($id)
    {
        die(__METHOD__ . ' ID: ' . $id);
    }
}
?>
