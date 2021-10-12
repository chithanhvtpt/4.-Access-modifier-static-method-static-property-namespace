<?php

class User
{
    protected $name;
    protected $email;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }
    public $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function getInfo()
    {
        return 'Name :'. $this->name . '<br>' . 'email :'. $this->email . '<br>'. $this->isAdmin() . '<br>';
    }

    public function isAdmin()
    {
        if ($this->role === 1) {
            echo 'Admin';
        }else if ($this->role === 2) {
            echo 'Normal Human';
        }else {
            echo 'Non-access';
        }
    }
}