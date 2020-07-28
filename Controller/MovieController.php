<?php

require_once 'Controller.php';
require_once 'Models/Movie.php';
require_once 'Models/Author.php';
require_once 'Controller.php';

class MovieController extends Controller {

    protected $listTitle = 'Movies';
    protected $showTitle = 'Movie';
    protected $authors;

    public function __construct() {
        $this->model = new Movie;
        
        $author = new Author; 
        $this->authors = $author->all();
        
        parent::__construct();
    }

    public function edit($id = null)
    {

        $title = 'Edit Movie';
        $data  = null;
        $authors = $this->authors;
        
        if ($id > 0) {
            // existierendes movie
            $data = $this->model->find($id);
        }
        require_once 'Views/Forms/movie.php';
    }

    public function store($id = null)
    {
        // wir speichern unsere formular daten in variablen
        $title  = $_POST['title'];
        $price  = $_POST['price'];
        // todo: server-seitige validierung der form daten 
        $params = [
            'title' => $title,
            'price' => $price
        ];
        if ($id > 0) {
            // movie existiert bereits
            // füge den params die id als array element hinzu
            $params += ['id' => $id];
            $sql = "UPDATE movies SET title = :title, price = :price WHERE id = :id";
        } else {
            // movie muss neu angelegt werden
            $sql = "INSERT INTO movies (title, price) VALUES (:title , :price)";
        }

        $stmt = $this->model->prepare($sql);
        $stmt->execute($params);
        $this->model->_handleErrors($stmt);

        // todo: fehlerbehandlung
        // redirect zur listen ansicht
        header('location: /movies');
    }

    public function delete($id)
    {
        $sql = "DELETE FROM movies WHERE id = ?";
        $stmt = $this->model->prepare($sql);
        $stmt->execute([$id]);
        // redirect zur listen ansicht
        header('location: /movies');
    }
}
?>
