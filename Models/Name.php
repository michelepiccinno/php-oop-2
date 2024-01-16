<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Color.php';

class Palla extends Product
{
  use Color;

  public function __construct($image, $price, $description, Category $category, $color)
  {
    parent::__construct($image, $price, $description, $category);
    $this->color = $color;
  }
}


class Cuccia extends Product
{
  public $material;

  public function __construct($image, $price, $description, Category $category, $material)
  {
    parent::__construct($image, $price, $description, $category);
    $this->material = $material;
  }
}


class Cibo extends Product
{
  public $ingredient;
  
  public function __construct($image, $price, $description, Category $category, $ingredient)
  {
    parent::__construct($image, $price, $description, $category);
    $this->ingredient = $ingredient;
  }
}