<?php


class Password
{
    const SALT_TEXT = 'THis is SALT :) 123';
    private $password;
    private $hashedPassword;
    private $salt;

    /**
     * Password constructor.
     * @param $password
     * @param $saltText
     */
    public function __construct($password, $saltText = null)
    {
        $this->password = $password;
        $this->salt = md5(is_null($saltText) ? self::SALT_TEXT : $saltText);
        $this->hashedPassword = md5($this->salt . $password);
    }

    function __toString()
    {
        return $this->hashedPassword;
    }


}