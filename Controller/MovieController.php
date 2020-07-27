<?php

require_once 'Models/Movie.php';

class MovieController /** extends Controller */ {

    /**
     * @var Movie
     */
    private $model;

    public function __construct() {
        $this->model = new Movie;
    }

    public function index()
    {
        $title      = 'Movie';
        $movies    = $this->model->all();
        require_once 'Views/movies.php';
    }

    public function show($id)
    {
        $title  = 'Movie';
        $movie = $this->model->find($id);
        require_once 'Views/movie.php';
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
