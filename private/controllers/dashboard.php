<?php
class dashboard extends Controller 
{
     function index()
        {
 
            $user = new User();
            $data = $user->findAll();
            $this->view('dashboard', ['rows'=>$data]);
        }
}