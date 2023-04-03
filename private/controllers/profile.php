<?php

class Profile extends Controller
{

   public function index()
        {
            if(!Auth::logged_in())
            {
                $this->redirect("login");
            }
            $user = new User();
            

            $data = $user->where("id", $_SESSION['userID']);
            $this->view('profile', ['rows'=>$data]);
            
            
        }
}
