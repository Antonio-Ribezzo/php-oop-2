<?php
require_once __DIR__ .  '/product.php';

class Food extends Product{
    // property
    public $foodTypology; //wet/dry/snacks
    public $brand;
    public $animalSize;
    public $description;
    public $image;
    // constructor
    public function __construct($_type_of_product, $_type_of_animal, $_price, $_foodTypology, $_brand, $_animalSize, $_description, $_image)
    {
        parent::__construct($_type_of_product, $_type_of_animal, $_price);
        $this->foodTypology = $_foodTypology;
        $this->brand = $_brand;
        $this->animalSize = $_animalSize;
        $this->description = $_description;
        $this->image = $_image;
    }
}




?>