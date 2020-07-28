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

    public function edit($id = null)
    {
        
        $title = 'Edit Author';
        if($id){
            $data = $this->model->find($id);
        } else{

        }
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
        $params = [
            'firstname' => $firstname,
            'lastname'  => $lastname
        ];
        if( $id > 0 ) {
            // author existiert bereits
            // füge den params die id als array element hinzu
            $params += ['id' => $id];
            $sql = "UPDATE authors SET firstname = :firstname, lastname = :lastname WHERE id = :id";
        } else {
            // author muss neu angelegt werden
            $sql = "INSERT IGNORE INTO authors (firstname, lastname) VALUES (:firstname , :lastname)";
        }

        $stmt = $this->model->prepare($sql);
        $stmt->execute($params);
        // todo: fehlerbehandlung
        // redirect zur listen ansicht
        header('location: /authors');
    }

    public function delete($id)
    {
        $sql = "DELETE FROM authors WHERE id = ?";
        $stmt = $this->model->prepare($sql);
        $stmt->execute( [ $id ] );
        // redirect zur listen ansicht
        header('location: /authors');
    }
}
?>
