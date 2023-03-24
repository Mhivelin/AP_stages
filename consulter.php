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


    //$host = "172.16.135.1";
    //$login = "Ap-Stage";
    //$password = '123';
    //$bdsql = new PDO('mysql:host=' . $host . ';dbname=stages', $login, $password)
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

        <h1 class="text-center">Consulter</h1>
        <br>

        <label>le type d'information à consulter</p>
            <select class="form-select" id="type_consultation" onchange="afficher()">
                <option selected>choisir le type de consultation</option>
                <option value="1">Consulter les étudiants</option>
                <option value="3">Consulter les entreprises</option>
            </select>
            <div id="affichage_etudiant" class="card">
                <div class="card-header">
                    <h3>Stages</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Année</th>
                                <th scope="col">Entreprise</th>
                                <th scope="col">adresse</th>
                                <th scope="col">Date début</th>
                                <th scope="col">Date fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            //$sql = "SELECT * FROM etudiant INNER JOIN stage ON etudiant.d = stage.id_etudiant";
                            //$result = $bdsql->query($sql);
                            //$result->setFetchMode(PDO::FETCH_ASSOC);
                            //
                            //while ($row = $result->fetch()) {
                            //    echo "<tr>";
                            //    echo "<td>" . $row['nom'] . "</td>";
                            //    echo "<td>" . $row['prenom'] . "</td>";
                            //    echo "<td>" . $row['annee'] . "</td>";
                            //    
                            //}

                            ?>


                        </tbody>
                    </table>
                </div>

            </div>

            <div id="affichage_entreprise" class="card">
                <div class="card-header">
                    <h3>Stages</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Entreprise</th>
                                <th scope="col">année</th>
                            </tr>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>

            </div>

    </div>



    <script type="text/javascript">
        document.getElementById("affichage_etudiant").style.display = "none";
        document.getElementById("affichage_entreprise").style.display = "none";




        function afficher() {
            if (document.getElementById("type_consultation").value == 1) {
                document.getElementById("affichage_etudiant").style.display = "block";
                document.getElementById("affichage_entreprise").style.display = "none";
            } else {
                document.getElementById("affichage_etudiant").style.display = "none";
                document.getElementById("affichage_entreprise").style.display = "block";
            }


        }
    </script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>