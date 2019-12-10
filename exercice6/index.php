<?php
  $page = 'Exercice 6';//déclaration d'une variable pour l'exercice
  function message($lastname, $firstname, $age)//création d'une fonction qui prend 2 variables en paramètre
  {
    echo 'Bonjour ' .$lastname. ' ' .$firstname. ', tu as ' .$age. ' ans.';//concaténe les 2 variables pour afficher un message
  }
  include '../header.php';//inclus le header et la navbar
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= message('Francelle', 'Anthony', 36) ?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
