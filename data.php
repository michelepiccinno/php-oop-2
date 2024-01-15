<?php
require_once __DIR__ . '/Models/Products.php';

$prodotti = [
    new Product(
      "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSTYSPz2BczaO0ZjYmW1Z0A1ZXgW3qBIPQMzqvzgI2sgQjx1c1xBSReGdm0nTcp7OIJqJYmxFR8tD4B61GFP_t8Nbd-Qb3dkvz2Y7YpqXkxjgArQ6LH0wBRcKYFgEBoLapB1o5O8Q&usqp=CAc",
      'Cuccia',
      'Cuccia con tappetino riscaldato',  
      '30 €',
      new Category('<i class="fa-solid fa-dog"></i>') 
    ),
    new Product(
      'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRqd0IlWV-PNxP08k3ibHa6SS4iUwZcXjtiUmhJ0_zEk6XRtnKyllEgZZaFfe_YSGkvIZbTAB2b26vFxQuBBOhOetunMxWRn4F-uGxIsZosVYIbgl1wm8nnik6-BVd20Rafo1Xl2_Zzaeo&usqp=CAc',
      'Crocchette',
      '18 €',
      'Crocchette al pollo 2kg',
      new Category('<i class="fa-solid fa-cat"></i>'),

    ),
    new Product(
      'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTUCt-OizO-SDkR86PMRink6EW0DyIHc-09gjeZzzXibBq-_WmZi3gH1S965gry-tShc8lrLBFqWtqpGMdhDaaY5Gy4LgQfKWJ45lBFrwsWyTSTO3ghlzdnzKnlURuFYVYKd3spfw&usqp=CAc',
      'Palla',
      '4 €',      
      'Palla rimbalzante',
      new Category('<i class="fa-solid fa-dog"></i>')
    ),
]
?>