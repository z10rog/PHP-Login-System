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

      <div class="uk-section uk-container uk-text-center">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
          <form class="uk-form-stacked js-register">

            <h2>Registrering</h2>

            <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">E-post</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="epost@epost.com">
              </div>
            </div>

            <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">Passord</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Ditt passord">
              </div>
            </div>

            <div class="uk-margin">
              <button class="uk-button uk-button-default" type="submit">Registrer</button>
            </div>


          </form>
        </div>
      </div>

      <?php require_once "inc/footer.php" ?>

    </body>

</html>
