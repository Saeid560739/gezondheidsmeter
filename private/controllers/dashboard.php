<?php
class dashboard extends Controller 
{
     function index()
        {
 
            $user = new User();
            
            
            $data['firstname'] = 'ali';
            $data['lastname'] = 'ali';
            $data['email'] = 'ali@ali.com';
            //$data['password'] = 'janaaa';
            //$data['birth'] = '2023-03-29 09:17:16';
            //$data['weight'] = '90';
            $user->updateObject(3,$data);
            $data = $user->findAll();
            $this->view('dashboard', ['rows'=>$data]);
        }
}