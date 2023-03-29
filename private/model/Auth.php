<?php

class Auth
{
    public static function authen($row)
    {
        $_SESSION['USER'] = $row;
    }

    public static function loguot()
    {
        if(isset($_SESSION['USER']))
        {
            unset($_SESSION['USER']);
        }
    }

    public static function logged_in()
    {
        if(isset($_SESSION['USER']))
        {
            return true;
        }else{
            return false;
        }
    }
}

