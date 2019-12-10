<?php
  $page = 'Exercice 2';//déclaration d'une variable pour le numéro d'exercice
  include '../header.php';//inclus le header et la navbar dans le html
  function hello()//création d'une fonction
  {
    echo 'Bonjour tout le monde';//renvoie une chaînes de caractères
  }
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= hello()//appel de ma fonction dans le html?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
