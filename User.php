<?php

class User {
    private $id;
    protected $type = "user";
    public $firstName;
    public $lastName;
    public $mobile;
    public $email;
    public $username;
    private $password;
    private $registeredAt;

    public function __construct($_firstName, $_lastName) {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
    }
    public function setPassword() {
        $this->password = $this->firstName . $this->lastName . rand(1, 99);
    }
    public function getPassword() {
        return $this->password;
    }
    public function setRegistered() {
        $this->registeredAt = date('Y/m/d H:i:s');
    }
    public function getRegistered() {
        return $this->registeredAt;
    }
    public function getType() {
        return $this->type;
    }

}