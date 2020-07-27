<?php

require_once 'Controller.php';
require_once 'Models/Movie.php';

class MovieController extends Controller {

    protected $listTitle = 'Movies';
//    protected $listView = 'Views/movies.php';

    public function __construct() {
        $this->model = new Movie;
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
