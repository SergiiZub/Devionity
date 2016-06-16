<?php


class User
{
    protected $login;
    protected $password;
    protected $email;
    protected $rating = 0;
    protected $isLogged;
    public $prop = [];

    public function __set($name, $value)
    {
        switch ($name){
            case ('login'): echo $this->login = $value . "\n";
                break;
            case ('password'): $this->password = $value;
                break;
            case ('email'): $this->email = $value;
                break;
            case ('rating'): $this->rating = $value;
                break;
            default : echo $this->prop[$name] = $value . "\n";
        }
    }

    public function __get($name)
    {
        switch ($name){
            case ('login'): return $this->login;
                break;
            case ('password'): return $this->password;
                break;
            case ('email'): return $this->email;
                break;
            case ('rating'): return $this->rating;
                break;
            default :
                if (isset($this->prop[$name])) {
                    return $this->prop[$name];
                }
                else return 'такого свойства не существует';
        }
    }

    public function login(){
        $this->isLogged = true;
        echo $this->isLogged . " Login!!!<br/>" . "\n";
    }
    
    public function logout(){
        $this->isLogged = false;
        echo $this->isLogged . " Logout<br/>" . "\n";
    }

    public function setProperty($login, $password, $email, $rating){
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->rating = $rating;
    }

    public function getProperty(){
        return [
            $this->login,
            $this->password,
            $this->email,
            $this->rating
        ];
    }
}