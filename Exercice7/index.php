<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <title>Exercice 7</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class='container-fluid bg-secondary'>

  <div class="row mt-5">
    <div class="jumbotron shadow-lg mx-auto text-center">
      <p>
        <?php
          $firstname = 'Pierre';
          $lastname = 'Monvoisin';
          $age = 21;
          echo "Bonjour $lastname $firstname, tu as $age ans";
        ?>
      </p>
      <div class="text-right mt-1">Un message de la direction</div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
