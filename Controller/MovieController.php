<?php

require_once 'Models/Movie.php';
require_once 'Controller.php';

class MovieController extends Controller{

    /**
     * @var Movie
     */
    /*das Model wird vom übergeordneten Controller.php geerbt
    protected $model;*/
    protected $listTitle = 'Movie';
    protected $listView = 'Views/movies.php';

    public function __construct() {
        $this->model = new Movie;
    }

   /* diese Funktion wird jetzt vom übergeordneten Controller.php geerbt
   public function index()
    {
        $title   = 'Movie';
        $list    = $this->model->all();
        require_once 'Views/movies.php';
    }*/

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