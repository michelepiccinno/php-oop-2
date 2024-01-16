<?php
class Product 
{    
    public $image;
    protected $price;
    public $description;
    public Category $category;

    public function __construct($image, $price, $description, Category $category)
    {      
      $this->image = $image;  
      $this->price = $price;
      $this->description = $description;
      $this->category = $category;
    }

    public function getPrice()
    {
      return $this->price;
    }
}



?>