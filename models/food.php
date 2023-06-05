<?php
require_once __DIR__ .  '/product.php';

class Food extends Product{
    // property
    public $foodTypology; //wet/dry/snacks
    public $brand;
    public $name;
    public $animalSize;
    public $Description;
    public $image;
    // constructor
    public function __construct($_type_of_product, $_type_of_animal, $_price, $_foodTypology, $_brand,$_name, $_animalSize, $_Description, $_image)
    {
        parent::__construct($_type_of_product, $_type_of_animal, $_price);
        $this->foodTypology = $_foodTypology;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->animalSize = $_animalSize;
        $this->Description = $_Description;
        $this->image = $_image;
    }

    // methods 
    public function getClassName(){
        return get_class();
    }
}




?>