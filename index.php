<?php /*Stampare una stringa verde se la
variabile password passata in GET è
uguale a "Boolean", altrimenti stampare
una stringa rossa.*/ ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php

    $password = $_GET['password'];
    $access = ($password == | 'Boolean');

     ?>
  </head>
  <body>



      <?php

      if ($access) {

      ?>
        <h1 style="color:green"> <?php  echo "Accesso Consentito" ?> </h1>;

        <?php
      }else {
         ?>
        <h1 style="color:red"> <?php echo "Accesso Negato" ?> </h1>;

        <?php
      }

       ?>


  </body>
</html>
