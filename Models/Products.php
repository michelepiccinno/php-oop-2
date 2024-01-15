<?php
require_once __DIR__ . '/Models/Categories.php';

class Product 
{
    public $name;
    public $price;
    public $description;
    public $categories;
    public $image;


    public function __construct($name, $price, $description, Categories $categories, $image)
    {
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
      $this->categories = $categories;
      $this->image = $image;
    }
}

?>