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

    public function index()
    {
        $selectedAuthor = null;

        if(isset($_POST['author_id']) && $_POST['author_id'] > 0) {
            $selectedAuthor = $_POST['author_id'];
            $params = ['author_id' => $selectedAuthor];
            $list = $this->model->where($params);
        } else {
            $list = $this->model->all();
        }

        $authors    = $this->authors;
        $title      = 'Movies';
        
        require_once 'Views/movie/index.php';
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
        $title  = $_POST['title'];
        $price  = $_POST['price'];
        $author_id = $_POST['author_id'];

        if( isset($_FILES['image']) && $_FILES['image']['error'] == 0 ) {
            $image          = $_FILES['image']['name'];
            $source         = $_FILES['image']['tmp_name'];
            $destination    = __DIR__ . '/../uploads/' . $image;

            if(move_uploaded_file($source, $destination)) {
                @chmod($destination, 0666);
            }
        } 
        else {
            $image = null;
        }       

        // wir speichern unsere formular daten in variablen
        // todo: server-seitige validierung der form daten 
        $params = [
            'author_id' => $author_id,
            'title'     => $title,
            'price'     => $price,
        ];
        if($image) {
            $params += ['image' => $image];
        }

        if ($id > 0) {
            $this->model->update($params, $id);
/*
            // movie existiert bereits
            // füge den params die id als array element hinzu
            $params += ['id' => $id];
            if($image) {
                $sql = "UPDATE movies SET title = :title, price = :price, author_id = :author_id, image = :image WHERE id = :id";
            } else {
                $sql = "UPDATE movies SET title = :title, price = :price, author_id = :author_id WHERE id = :id";
            }
*/            
        } else {
            // movie muss neu angelegt werden
            // todo: create insert function in model
            $sql = "INSERT INTO movies (title, price, author_id, image) VALUES (:title , :price, :author_id, :image)";
            $stmt = $this->model->prepare($sql);
            $stmt->execute($params);
        }

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
