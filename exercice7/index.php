<?php
  $page = 'Exercice 7';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  function verification($gender, $age)//Defini une fonction qui prend 2 variables en paramètre
  {//la fonction suivra les instructions suivantes:
    if ($gender == 'homme' && $age >= 18)//condition si c'est un homme et qu'il est majeur
    {
      echo 'Vous êtes un ' .$gender. ' et vous êtes majeur.';//affiche ce message
    }
    elseif ($gender == 'femme' && $age >= 18)//condition si c'est une femme et qu'elle est majeur
    {
      echo 'Vous êtes une ' .$gender. ' et vous êtes majeur.';// affiche ce message
    }
    elseif ($gender == 'homme' && $age < 18)//condition sinon si c'est un homme et qu'il est mineur
    {
      echo 'Vous êtes un ' .$gender. ' et vous êtes mineur.';// affiche ce message
    }
    elseif ($gender == 'femme' && $age < 18)//condition sinon si c'est une femme et qu'elle est mineur
    {
      echo 'Vous êtes une ' .$gender. ' et vous êtes mineur.';// affiche ce message
    }
    else {
      echo 'Veuillez rentrer un genre valide.';//sinon affiche ce message
    }
  }
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= verification('femme', 17)//affiche la fonction avec 2 valeurs ?></p>
  <p><?= verification('homme', 56 )?></p>
  <p><?= verification('femme', 41)?></p>
  <p><?= verification('homme', 8)?></p>
  <p><?= verification('monstre', 1000)?></p>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
