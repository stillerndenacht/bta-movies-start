<?php
require_once 'inc/MyDB.php';

class Model extends MyDB {
    
    protected $table;

    public function all()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        return $this->getAll($sql);
    }

    public function find($id)
    {
        $sql = 'SELECT * FROM '. $this->table.' WHERE id = :id';
        $result = $this->getOne($sql, ['id' => $id]);

        return $result;
    }
}
?>