<?php
class dashboard extends Controller 
{
     function index()
        {
 
            $user = $this->load_model('user');
            $data = $user->findAll();
            $this->view('dashboard', ['rows'=>$data]);
        }
}