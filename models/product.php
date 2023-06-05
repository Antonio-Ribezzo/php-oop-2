<?php
    class Product{
        // property
        public $type_of_product; // food, game, accessories
        public $category; //cat or dog
        public $price;
        // constructor
        public function __construct(TypeOfProduct $_type_of_product, Category $_category, $_price) {
            $this->type_of_product = $_type_of_product;
            $this->category = $_category;
            $this->price = $_price;
        }

        // methods
       public function getProductDetails(){
        return "Product Type: $this->type_of_product, Category: $this->category, Price: $this->price";
       }
    
       public function getCategoryIcon(){
        $icon= $this->category->icon;
        return "<i class='$icon'></i>";
       }

    }









?>