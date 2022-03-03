<?php
require_once __DIR__ . '/Products.php';
class Games extends Products
{
    public $animal;
    public $type;
    public $material;


    public function __construct($name, $price, $animal, $type, $material)
    {
        parent::__construct($name, $price);
        $this->setAnimal($animal);
        $this->setType($type);
        $this->setMaterial($material);
    }
    // settings
    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
