<?php

require_once 'Model.php';

class Author extends Model {
    
    protected $table = 'authors';

    public function find($id, $withMovies = false)
    {
        $author = parent::find($id);
        
        if($withMovies) {
            $movies = $this->getAll('SELECT * FROM movies WHERE author_id = :id', ['id' => $author['id']]);
            $author['movies'] = $movies;
        }

        return $author; 
    }
}
?>
