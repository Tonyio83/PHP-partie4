<?php
  $page = 'Exercice 5';//déclaration d'une variable pour afficher le numéro d'exercice
  function stats($player, $points)//création d'une fonction qui prend 2 variables en paramètre
  {
    echo $player. ' a marqué ' .$points. ' points.';//concaténe les 2 variables pour afficher un message
  }
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= stats('James', 41)//affiche la fonction dans le html ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
