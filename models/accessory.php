<?php
require_once __DIR__ .  '/product.php';
require_once __DIR__ . '../../traits/petSize.php';

class Accessory extends Product{
    // traits
    use petSize;
    // property
    public $brand;
    public $name;
    public $Description;
    public $image;
    // constructor
    public function __construct($_type_of_product, $_type_of_animal, $_price, $_brand,$_name, $_Description, $_image, $_petSize)
    {
        parent::__construct($_type_of_product, $_type_of_animal, $_price);
        $this->brand = $_brand;
        $this->name = $_name;
        $this->Description = $_Description;
        $this->image = $_image;
        $this->petSize = $_petSize;
    }

    // methods 
    public function getClassName(){
        return get_class();
    }
}




?>