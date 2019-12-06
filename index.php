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

    <h1>

      <?php

      if ($access) {

        echo "Accesso Consentito";

      }else {

        echo "Accesso Negato";
        
      }

       ?>

    </h1>
  </body>
</html>
