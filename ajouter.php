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
                <a class="nav-link" href="deconnexion.php">deconnexion</a>
            </li>

        </ul>
    </div>

    <div class="container">
        <h1 class="text-center">Ajouter</h1>

        <label for="choix_ajout" class="form-label">Que voulez vous ajouter ?</label>
        <select class="form-select" id="choix_ajout" onchange="afficher()">
            <option value="1">Ajouter un étudiant</option>
            <option value="2" selected>Ajouter un stage</option>
            <option value="3">Ajouter une entreprise</option>
        </select>






        <div id=" infos_ajout_stage" class="card">
            <div class="card-body">
                <h1>stage</h1>
                <form method="POST">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="etudiant_existant" checked onchange="afficher()">
                        <label class="form-check-label" for="flexSwitchCheckDefault">l'étudiant existe t'il déjà
                            ?</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="entreprise_existante" checked onchange="afficher()">
                        <label class="form-check-label" for="flexSwitchCheckDefault">l'entreprise existe t'elle déjà
                            ?</label>

                    </div>

                </form>


            </div>
        </div>

        <div id="choix_etudiant" class="card">
            <div class="card-body">
                <h1>choisir etudiant</h1>
                <select class="form-select">
                    <option selected>choisir un étudiant</option>
                    <option value="1">etudiant 1</option>
                    <option value="2">etudiant 2</option>
                    <option value="3">etudiant 3</option>

                </select>
            </div>
        </div>

        <div id="ajouter_etudiant" class="card">
            <div class="card-body">
                <h1>ajouter etudiant</h1>
                <form method="POST">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="nom">

                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="prenom">


                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>
            </div>
        </div>

        <div id="choix_entreprise" class="card">
            <div class="card-body">
                <h1>choisir entreprise</h1>
                <select class="form-select">
                    <option selected>choisir une entreprise</option>
                    <option value="1">entreprise 1</option>
                    <option value="2">entreprise 2</option>
                    <option value="3">entreprise 3</option>

                </select>
            </div>

        </div>





        <div id="ajouter_entreprise" class="card">
            <div class="card-body">
                <h1>ajouter entreprise</h1>
                <form method="POST">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="nom">

                    <label for="adresse">adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="adresse">

                    <label for="ville">ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="ville">

                    <label for="code_postal">code postal</label>
                    <input type="text" name="code_postal" class="form-control" placeholder="code postal">

                    <label for="telephone">telephone</label>
                    <input type="text" name="telephone" class="form-control" placeholder="telephone">

                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control" placeholder="email">

                    <label for="secteur_activite">secteur d'activité</label>
                    <input type="text" name="secteur_activite" class="form-control" placeholder="secteur d'activité">

                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>


            </div>


        </div>

        <div id="ajouter_stage" class="card">
            <div class="card-body">
                <h1>ajouter stage</h1>
                <form method="POST">
                    <label for="nom">nom</label>
                    <input type="date" name="date_debut" class="form-control" placeholder="date de début">

                    <label for="prenom">prenom</label>
                    <input type="date" name="date_fin" class="form-control" placeholder="date de fin">

                    <label for="prenom">prenom</label>
                    <input type="text" name="description" class="form-control" placeholder="description">



                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>

            </div>
        </div>




    </div>


    </div>




    </div>



    <script type="text/javascript">
        // cacher les divs de chaque type d'ajout
        document.getElementById("ajouter_etudiant").style.display = "none";
        document.getElementById(" infos_ajout_stage").style.display = "block";
        document.getElementById("ajouter_entreprise").style.display = "none";
        document.getElementById("choix_etudiant").style.display = "block";
        document.getElementById("choix_entreprise").style.display = "block";
        document.getElementById("ajouter_stage").style.display = "none";


        function afficher() {
            var select = document.getElementById("choix_ajout");
            var value = select.options[select.selectedIndex].value;

            if (value == 1) {
                document.getElementById("ajouter_etudiant").style.display = "block";
                document.getElementById(" infos_ajout_stage").style.display = "none";
                document.getElementById("ajouter_entreprise").style.display = "none";
                document.getElementById("choix_etudiant").style.display = "none";
                document.getElementById("choix_entreprise").style.display = "none";
                document.getElementById("ajouter_stage").style.display = "none";


            } else if (value == 2) {

                document.getElementById(" infos_ajout_stage").style.display = "block";
                document.getElementById("ajouter_entreprise").style.display = "none";
                document.getElementById("ajouter_etudiant").style.display = "none";
                document.getElementById("choix_etudiant").style.display = "none";
                document.getElementById("choix_entreprise").style.display = "none";
                document.getElementById("ajouter_stage").style.display = "block";


                if (document.getElementById("etudiant_existant").checked) {
                    document.getElementById("choix_etudiant").style.display = "block";
                    document.getElementById("ajouter_etudiant").style.display = "none";
                } else {
                    document.getElementById("choix_etudiant").style.display = "none";
                    document.getElementById("ajouter_etudiant").style.display = "block";
                }
                if (document.getElementById("entreprise_existante").checked) {
                    document.getElementById("choix_entreprise").style.display = "block";
                    document.getElementById("ajouter_entreprise").style.display = "none";
                } else {
                    document.getElementById("choix_entreprise").style.display = "none";
                    document.getElementById("ajouter_entreprise").style.display = "block";
                }


            } else if (value == 3) {
                document.getElementById("ajouter_etudiant").style.display = "none";
                document.getElementById(" infos_ajout_stage").style.display = "none";
                document.getElementById("ajouter_entreprise").style.display = "block";
                document.getElementById("choix_etudiant").style.display = "none";
                document.getElementById("choix_entreprise").style.display = "none";
                document.getElementById("ajouter_stage").style.display = "none";

            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>



</html>