<?php
class Product 
{    
    public $image;
    public $name;
    public $price;
    public $description;
    public $category;

    public function __construct($image, $name, $price, $description, $category)
    {      
      $this->image = $image;  
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
      $this->category = $category;
    }
}



?>