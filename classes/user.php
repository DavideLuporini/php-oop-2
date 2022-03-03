<?php

class User
{

    public $name;
    public $lastName;
    public $username;
    public $id;
    public $age;
    public $subscribed;
    public $discount;

    public function __construct($name, $lastName, $username,  $age,  $id, $subscribed, $discount)
    {
        $this->setName($name);
        $this->setLastname($lastName);
        $this->setUsername($username);
        $this->setAge($age);
        $this->setId($id);
        $this->setSubscribed($subscribed);
        $this->setDiscount($discount);
    }
    // settings

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setage($age)
    {
        $this->age = $age;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setSubscribed($subscribed)
    {
        $this->subscribed = $subscribed;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}
