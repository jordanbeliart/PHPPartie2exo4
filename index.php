<?php
$age = 15;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie2 exo4</title>
  </head>
  <body>
    <?php
      if ($age >= 18) {
        echo 'Tu es majeur';
      } else {
        echo 'Tu n\'es pas majeur';
      }
    ?>
  </body>
</html>
