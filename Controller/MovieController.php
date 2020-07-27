<?php

require_once 'Controller.php';
require_once 'Models/Movie.php';
require_once 'Controller.php';

class MovieController extends Controller {

    protected $listTitle = 'Movies';
    protected $showTitle = 'Movie';

    public function __construct() {
        $this->model = new Movie;
        parent::__construct();
    }
/*
    public function show($id)
    {
        $title  = 'Movie';
        $movie = $this->model->find($id);
        require_once 'Views/movie.php';
    }
*/
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
