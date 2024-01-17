<?php
trait Color
{
  public  $color;

  public function setColor($color) 
  {
    $this->color = $color;
    return $color;
  }
}