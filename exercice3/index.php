<?php
  $page = 'Exercice 3';//déclaration d'une variable pour l'exercice
  function message($firstname, $lastname)//création d'une variable qui prend 2 variables en paramètre
  {
    echo 'Bienvenue ' .$firstname. ' ' .$lastname;//instructions de ma fonction 
  }
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= message('Anthony','Francelle')//appel de ma fonction avec les valeurs de mes variables?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
