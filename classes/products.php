<?php
class Products
{
    public $name;
    public $price;


    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    // settings
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
