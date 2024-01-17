<?php
class Product
{    
    public $image;
    public $description; 
    protected $price;
    public Category $category;

    public function __construct($image, $description, $price, Category $category)
    {      
      $this->image = $image;  
      $this->description = $description;  
      $this->price = $price;
      $this->category = $category;
    }

    public function getPrice()
    {
      return $this->price;
    }
}



?>