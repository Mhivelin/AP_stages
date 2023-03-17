<?php
session_start();
@$login = $_POST['login'];
@$password = $_POST['password'];
@$valider = $_POST['valider'];
$erreur = "";
if (isset($valider)) {
    // password = admin (md5) = 21232f297a57a5a743894a0e4a801fc3
    if ($login == "admin" && md5($password) == "21232f297a57a5a743894a0e4a801fc3") {
        $_SESSION["autoriser"] = "oui";
        header('Location: index.php');
    } else {
        $erreur = "Login ou mot de passe incorrect";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
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
        </ul>
    </div>

    <div class="container">
        <h1 class="text-center">Login</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Entrer votre login">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="valider">Valider</button>
        </form>
    </div>

    <?php
    if ($erreur != "") {
        echo "<div class='alert alert-danger' role='alert'>
        $erreur
      </div>";
    }



    ?>