<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/RegisteredUser.php';
require_once __DIR__ . '/Models/Name.php';
require_once __DIR__ . '/Models/Category.php';

$dog = new Category('<i class="fa-solid fa-dog"></i>') ;
$cat = new Category('<i class="fa-solid fa-cat"></i>');

$prodotti = [
    new Cuccia(
      'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSTYSPz2BczaO0ZjYmW1Z0A1ZXgW3qBIPQMzqvzgI2sgQjx1c1xBSReGdm0nTcp7OIJqJYmxFR8tD4B61GFP_t8Nbd-Qb3dkvz2Y7YpqXkxjgArQ6LH0wBRcKYFgEBoLapB1o5O8Q&usqp=CAc',
      'Cuccia con tappetino riscaldato',  
      30,
      $dog,
      'materiale plastica'
    ),
    new Cibo(
      'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRqd0IlWV-PNxP08k3ibHa6SS4iUwZcXjtiUmhJ0_zEk6XRtnKyllEgZZaFfe_YSGkvIZbTAB2b26vFxQuBBOhOetunMxWRn4F-uGxIsZosVYIbgl1wm8nnik6-BVd20Rafo1Xl2_Zzaeo&usqp=CAc',
      'Crocchette al pollo 2kg',
      18,
      $cat,
      'gusto formaggio'
    ),
    new Palla(
      'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTUCt-OizO-SDkR86PMRink6EW0DyIHc-09gjeZzzXibBq-_WmZi3gH1S965gry-tShc8lrLBFqWtqpGMdhDaaY5Gy4LgQfKWJ45lBFrwsWyTSTO3ghlzdnzKnlURuFYVYKd3spfw&usqp=CAc',
      'Palla rimbalzante',
      4,
      $dog,
    )
    ];


$utenti = [
    /*new User(
      'Mario',
      'Rossi',
      'mariorossi@mail.it'
    ),*/
    new RegisteredUser(
      'Mario',
      'Rossi',
      'mariorossi@mail.it'
    ),
    ];


if ($prodotti[2] instanceof Palla) {
    $prodotti[2]->color = '(by TrAiT) green';
}

?>

