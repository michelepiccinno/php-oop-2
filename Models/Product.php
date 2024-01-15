<?php
require_once __DIR__ . '/Categories.php';
require_once __DIR__ . '/Name.php';
class Product 
{    
    public $image;
    public $name;
    public $price;
    public $description;
    public $categories;



    public function __construct($image, $name, $price, $description, Category $categories)
    {      
      $this->image = $image;  
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
      $this->categories = $categories;
    }
}



?>