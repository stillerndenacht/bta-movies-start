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
        $title = 'Edit Autor';
        $data  = null;
        if( $id > 0 ) {
            // existierender author
            $data = $this->model->find($id);
        } 
        require_once 'Views/Forms/author.php';
    }

    public function store($id = null)
    {
        // wir speichern unsere formular daten in variablen
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        // todo: server-seitige validierung der form daten 
        if($id > 0 ) {
            // author existiert bereits
            $sql = "UPDATE authors SET firstname = :firstname, lastname = :lastname WHERE id = :id";
            $params = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'id'        => $id, 
            ];

        } else {
            // author muss neu angelegt werden
            $sql = "INSERT IGNORE INTO authors (firstname, lastname) VALUES (:firstname , :lastname)";
            $params = [
                'firstname' => $firstname,
                'lastname'  => $lastname
            ];
        }

        $stmt = $this->model->prepare($sql);
        $stmt->execute($params);
        // redirect zur listen ansicht
        header('location: /authors');
    }

    public function delete($id)
    {
        die(__METHOD__ . ' ID: ' . $id);
    }
}
?>
