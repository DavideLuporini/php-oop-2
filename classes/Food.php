<?php
require_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $animal;
    public $date;
    public $ingrediants;


    public function __construct($name, $price, $animal, $date, $ingrediants)
    {
        parent::__construct($name, $price);
        $this->setAnimal($animal);
        $this->setDate($date);
        $this->setIngrediants($ingrediants);
    }
    // settings
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setIngrediants($ingrediants)
    {
        $this->ingrediants = $ingrediants;
    }
}
