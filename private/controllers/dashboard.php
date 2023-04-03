<?php
class dashboard extends Controller 
{
     function index()
        {
            if(!Auth::logged_in())
            {
                $this->redirect("login");
            }
            $user = new User();
            

            $data = $user->where("id", $_SESSION['userID']);
            $this->view('dashboard', ['rows'=>$data]);
        }
}