<?php


class ContactForm
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $cpass;
    public $photo;

    public function __construct($subscriber)
    {
        $this->first_name = $subscriber['first_name'];
        $this->last_name = $subscriber['last_name'];
        $this->email = $subscriber['email'];
        $this->password = $subscriber['password'];
        $this->cpass = $subscriber['cpass'];
        $this->photo = $subscriber['photo'];
        echo "пользователь " . $this->first_name . " " . $this->last_name . " успешно создан! <br/>";
    }
}