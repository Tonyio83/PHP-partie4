<?php
  $page = 'Exercice 8';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  function addition($x1 = 63, $x2 = 45, $x3 = 23)//crée une fonction avec trois variables définis en paramètres
  {//la fonction prend l' instruction suivante
    echo $x1. ' + ' .$x2. ' + ' .$x3. ' = ' .($x1 + $x2 + $x3);//concatene les variables avec le résultat
  }
  include '../header.php';//inclus le fichier dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= addition()//affiche l'opération et le résultat dans le html ?></p>
</div>
<? include '../footer.php' //inclus le fichier dans le html?>
