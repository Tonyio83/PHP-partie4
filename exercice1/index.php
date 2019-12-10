<?php
  $page = 'Exercice 1';//déclaration d'une variable pour afficher le numéro de l'exercice dans le html
  include '../header.php';//inclus le header et la navbar
  function boolean()//création d'une fonction
  {
    return true;// la fonction retournera true
  }
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= 'La valeur du booléen est ' .boolean()//appel de la fonction dans le html?></p>
</div>
<?php include '../footer.php' //inclus le footer?>
