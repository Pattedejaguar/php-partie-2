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
      <h1 class="display-3">PHP ex1p2</h1>
      <p class="lead">Créer une variable age et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>

      </header>
      <!-- main -->
      <main class="text-center">
        <?php $age = 16;
        echo ($age>=18) ?'<p> vous êtes majeur(e)</p>':'<p>vous êtes mineur(e)</p>';?>
        <?php $age = 28;
        ($age>=18) ?'<p> vous êtes majeur(e)</p>':'<p>vous êtes mineur(e)</p>';?>
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
