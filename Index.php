<?php
require_once __DIR__ . '/data.php';
?>


<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" defer></script>
  <title>Titolo</title>
</head>

<body>
  <main>
    <section>
      <? /*var_dump($prodotti) */?>

      <div class="container">
        <div class="row">
          <? foreach ($prodotti as $item) { ?>
            <div class="col-3">
              <div class="card">
                <h1><?= $item->name ?></h1>
                <img src="<?= $item->image ?>" alt="immagine del prodotto">
                <h3><?= $item->price ?></h3>
                <h4><?= $item->description ?></h4>
                <h5>CATEGORIA: <?= $item->categories->categories ?></h5>
              </div>
            </div>
          <? } ?>
        </div>
      </div>

<? var_dump($utenti) ?>
    </section>
  </main>
  <script src="js/main.js"></script>
</body>

</html>