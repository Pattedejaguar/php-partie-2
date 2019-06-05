<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title></title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <div class="jumbotron">
      <h1 class="display-3">PHP ex2p2</h1>
      <p class="lead">Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
        Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
        Bonus : L'écrire de deux manières différentes.</p>
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>

      </header>

      <!-- main -->
      <main class="text-center">
        <?php
        $lalune = true ;
        $lesoleil= false ;
        ?>

        <p> la lune est <?php echo($lalune)? "froide":"chaude"; ?></p>
        <p> le soleil est <?php echo($lesoleil)? "froid":"chaud"; ?></p>
       </main>
      <!-- footer -->
      <footer>

      </footer>
    </div>
    <!-- scripts JQuery Popper et Bootstrap-->
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- mon script principal -->
    <script src="assets/js/main.js"></script>
  </body>
  </html>
