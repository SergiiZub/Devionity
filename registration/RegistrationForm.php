<?php


class RegistrationForm
{
    private $username;
    private $email;
    private $password;
    private $passwordConfirm;

    /**
     * RegistrationForm constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->passwordConfirm = isset($data['passwordConfirm']) ? $data['passwordConfirm'] : null;
    }

    public function passwordsMatch()
    {
        return $this->password == $this->passwordConfirm;
    }

    public function validate()
    {
        return !empty($this->username) && !empty($this->email)
        && !empty($this->password) && !empty($this->passwordConfirm)
            && $this->passwordsMatch();
    }

    /**
     * @return mixed|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    


}