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
      <h1 class="display-3">PHP ex4p2</h1>
      <p class="lead">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
        Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
        <hr class="my-2">
        <p></p>
      </div>
      <!-- header -->
      <header>

      </header>
      <!-- main -->
      <main class="text-center">
        <!-- utilisation d'un tableau array -->
        <?php
        $magnitude=4;
        $descrition= array("Micro-séisme impossible à ressentir.",
        "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
        "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.",
        "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.",
        "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.",
        "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
        "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
        "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
        "Séisme capable de tout détruire sur une très vaste zone.");
        ?>
        <p>Le séisme est de puissance <?= $magnitude ?>.</p>
        <?php
        if ($magnitude>0){
          echo $descrition[$magnitude-1];
        }
        ?>

<!-- utilisation d'un switchcase -->
<?php
$magnitude = 5;
switch ($magnitude) {
 case 1:
     echo "Micro-séisme impossible à ressentir. (Magnétude = $magnitude";
     break;
 case 2:
     echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. (Magnétude = $magnitude";
     break;
 case 3:
     echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. (Magnétude = $magnitude";
     break;
 case 4:
     echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. (Magnétude = $magnitude";
     break;
 case 5:
     echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. (Magnétude = $magnitude";
     break;
 case 6:
     echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. (Magnétude = $magnitude";
     break;
 case 7:
     echo " 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. (Magnétude = $magnitude";
     break;
 case 8:
     echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. (Magnétude = $magnitude";
     break;
 case 9:
     echo "Séisme capable de tout détruire sur une très vaste zone. (Magnétude = $magnitude)";
     break;
}
?>


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
