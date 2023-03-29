<?php
class User extends Model
{
    public function validate($data)
    {
        $this->errors = array();

        if(empty($data['voornaam']) || !preg_match('/^[a-zA-Z]+$/', $data['voornaam']))
        {
            $this->errors['voornaam'] = "Voornaam mag alleen uit letters bestaan";
        }
        if(empty($data['achternaam']) || !preg_match('/^[a-zA-Z]+$/', $data['achternaam']))
        {
            $this->errors['achternaam'] = "Achternaam mag alleen uit letters bestaan";
        }
        if(empty($data['gewicht']) || !is_numeric($data['gewicht']))
        {
            $this->errors['gewicht'] = "Vul goede gewicht in";
        }
        if(empty($data['email']))
        {
            $this->errors['email'] = "Vul uw email in";
        }

        if($data['password'] != $data['password1'])
        {
            $this->errors['password'] = "De wachtwoord is onjust";
        }
        if(count($this->errors) == 0)
        {
            return true;
        }
        return false;
    }
    public function addUser($DATA)
    {
                   
            
        $data['firstname'] = $DATA['voornaam'];
        $data['lastname'] = $DATA['achternaam'];
        $data['email'] = $DATA['email'];
        $data['password'] = password_hash($DATA['password'], PASSWORD_DEFAULT) ;
        $data['birth'] = $DATA['geboortedatum'];
        $data['weight'] = $DATA['gewicht'];
        $this->addObject($data);
    }

}
