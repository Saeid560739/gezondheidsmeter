<?php

class Model extends Database 
{
    function __construct()
    {

    }
    public function where($column, $value)
    {
        $query = "select * from users where $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
    }
    public function findAll()
    {
        $query = "select * from users";
        return $this->query($query);
    }

    
}
