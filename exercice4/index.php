<?php
  $page = 'Exercice 4';//déclaration d'une variable pour afficher le numéro d'exercice dans le html
  function compareNumber($x, $y)
  {
    if($x > $y)
    {
      echo 'Le premier nombre est plus grand';
    }
    elseif ($x < $y)
    {
      echo 'Le premier nombre est plus petit';
    }
    else
    {
      echo 'Les deux nombres sont identiques';// code...
    }
  }
  include '../header.php';//inclus le header et la navbar dans le html
  ?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <p><?= compareNumber(3, 8) ?></p>
  <p><?= compareNumber(110, 65) ?></p>
  <p><?= compareNumber(83, 83) ?></p>
</div>
<? include '../footer.php' //inclus le footer?>
