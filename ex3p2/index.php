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
      <h1 class="display-3">PHP ex3p2</h1>
      <p class="lead">Créer deux variables age et gender. La variable gender peut prendre comme valeur : Homme Femme En fonction de l'âge et du genre afficher la phrase correspondante :
        Vous êtes un homme et vous êtes majeur
        Vous êtes un homme et vous êtes mineur
        Vous êtes une femme et vous êtes majeur
        Vous êtes une femme et vous êtes mineur

        Gérer tous les cas.</p>
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>

      </header>
      <!-- main -->
      <main class="text-center">


        <?php
        $age = rand(1, 60);
        $gender ='femme';
        echo 'vous êtes ';
        if($gender == 'femme'){
          echo 'une femme et vous êtes ';
          echo ($age>18)?'majeure':'mineure';
        }else{
          echo ' un homme et vous êtes ';
          echo ($age>18)? 'majeur':'mineur';
        }
        ?>
        <?php
        $age = 14;
        $gender ='homme';
        echo 'vous êtes ';
        if($gender == 'femme'){
          echo 'une femme et vous êtes ';
          echo ($age>18)?'majeure':'mineure';
        }else{
          echo 'un homme et vous êtes ';
          echo ($age>18)? 'majeur':'mineur';
        }
        ?>
      </ul>


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
