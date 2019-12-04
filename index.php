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
  <p>
    <?php if($age >= 18){ ?>
      Tu es majeur
    <?php } else{ ?>
      Tu n'es pas majeur
    <?php } ?>
  </p>
</body>
</html>
