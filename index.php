<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION["autoriser"]) && $_SESSION["autoriser"] == "oui") {
    echo "Bienvenue " . $_SESSION["login"];
  } else {
    header('Location: login.php');
    exit();
  }
  ?>







  <div class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consulter.php">Consulter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ajouter.php">Ajouter</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="deconnection.php">Deconnection</a>
      </li>


    </ul>
  </div>

  <div class="container">
    <h1 class="text-center">Acceuil</h1>
    <br>
    <p>
      bienvenue sur le site de gestion des stages, ici, vous pouvez consulter les stages et ajouter des stages, bonne
      visite.
    </p>

    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Consulter</h5>
            <p class="card-text">Consulter les stages</p>
            <a href="consulter.html" class="btn btn-primary">Consulter</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Ajouter</h5>
            <p class="card-text">Ajouter un stage</p>
            <a href="ajouter.html" class="btn btn-primary">Ajouter</a>
          </div>
        </div>
      </div>







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>