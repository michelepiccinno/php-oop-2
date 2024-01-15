<?php
require_once __DIR__ . '/Models/Products.php';

$prodotti = [
    new Product(
      'Cuccia',
      30,
      'Cuccia con tappetino riscaldato',
      new Categories('Cane'),
      'immagine da inserire'
    ),
    new Product(
      'Crocchette',
      18,
      'Crocchette al pollo 2kg',
      new Categories('Gatto'),
      'immagine da inserire'
    )
]
?>