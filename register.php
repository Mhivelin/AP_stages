<?php
session_start();
@$login = $_POST['login'];
@$password = $_POST['password'];
@$confirm_password = $_POST['confirm_password'];
@$email = $_POST['email'];
@$valider = $_POST['valider'];
$erreur = "";
if (isset($valider)) {
    if ($login == "admin" && md5($password) == "21232f297a57a5a743894a0e4a801fc3" && $password == $confirm_password) {
        $_SESSION["autoriser"] = "oui";
        header('Location: index.php');
    } else {
        $erreur = "Login ou mot de passe incorrect ou confirmation de mot de passe non identique";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
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
        <h1 class="text-center">register</h1>
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
            <div class="form-group">
                <label for="confirm_password">Confirmation de mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmer votre mot de passe">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre adresse email">
            </div>
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