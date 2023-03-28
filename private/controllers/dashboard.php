<?php
class dashboard extends Controller 
{
    public function index($id = null)
        {
            $this->view('dashboard');
        }
}