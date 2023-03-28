<?php
class dashboard extends Controller 
{
     function index()
        {
            
            $db = new Database();
            $data = $db->query('select * from users');
            $this->view('dashboard', ['rows'=>$data]);


        }
}