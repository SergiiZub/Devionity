<?php


interface Users
{
    public function login();
    
    public function logout();
    
    public function setProperty($login, $password, $email, $rating);

    public function getProperty();
}