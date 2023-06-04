<?php
require_once __DIR__ .  '/product.php';

class Game extends Product{
    // property
    public $brand;
    public $description;
    public $image;
    // constructor
    public function __construct($_type_of_product, $_type_of_animal, $_price, $_brand, $_description, $_image)
    {
        parent::__construct($_type_of_product, $_type_of_animal, $_price);
        $this->brand = $_brand;
        $this->description = $_description;
        $this->image = $_image;
    }
}




?>