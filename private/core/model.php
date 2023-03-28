<?php

class Model extends Database 
{
    function __construct()
    {

    }
    public function where($column, $value)
    {
        $query = "select * from users where :colomn = :value";
        return $this->query($query, [
            'colomn' => $column,
            'value' => $value
        ]);
    }

    
}
