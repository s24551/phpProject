<?php

class user
{
    private $id;
    private $login;
    private $construct;

    public function __construct($anon = true)       //default for anon user
    {
        if($anon == true){
            $this->id =0;
            $this->login = '';
        }
        $this->construct = true;
    }
}
?>