<?php

class Model extends Database 
{
    public $errors = array();
    function __construct()
    {
        echo $this::class;
        if(!property_exists($this, 'table'))
        {
            $this->table = strtolower( $this::class) . "s";
        }

    }
    public function where($column, $value)
    {
        $column = addcslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
    }
    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }

    public function addObject($data)
    {
        
        $keys = array_keys($data);
        $columns = implode(",", $keys);
        $values = implode(",:", $keys);
        $query = "INSERT INTO $this->table ( $columns ) VALUES (:$values);";       
        return $this->query($query,$data);   
    }
    public function updateObject($id, $data)
    {
        $str = "";
        foreach($data as $key => $value)
        {
            $str .= $key . "=:" . $key. ",";
        }
        $str = trim($str,",");
        $data['id'] = $id;
        $query = "UPDATE $this->table SET $str WHERE id = :id"; 
        echo $query;    
        return $this->query($query,$data);   
    }

    public function deleteObject($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id"; 
        $data['id'] = $id;
        return $this->query($query,$data);  
    }
    
}
