<?php
  // Tillatt konfigurasjonsfil
  define('__CONFIG__', true);
  //Krev konfigurasjonsfil
 require_once "inc/config.php"
 ?>

<!DOCTYPE html>
<html lang="no">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="robots" content="follow">

      <title>PHP-log-in-system</title>

      <base href="/" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
    </head>

    <body>

      <div class="uk-section uk-container">
        <?php
          echo "Hallo! I dag er det ";
          echo date("d m Y");
        ?>

        <p>
          <a href="php_login_system/login.php">Logg inn</a>
          <a href="php_login_system/register.php">Registrer</a>
        </p>

      </div>

      <?php require_once "inc/footer.php" ?>

    </body>

</html>
