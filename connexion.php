<?php
session_start();
//$_SESSION["id"]="Anael";
include "fonctions.php";

?>
    <!doctype html>
    <html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="icon" type="image/png" href="images/pttlogo.png">

        <title>SpearITournament - Connexion</title>

        <style>
            <?php
            setPubStyle();
            setFormStyle();
            ?>

        </style>
    </head>

    <body>
        <?php
        setMenu("Profil");
        ?>

        <form id="form" method="post" action="index.php?connexion=TRUE">
            <?php
                if (isset($_GET["inscription"])) {
                    //var_dump($_POST);
                    $testUserMail = sizeof(getUserByMail($_POST["eMail"]));
                    $testUser = sizeof(getUserByPseudo($_POST["pseudo"]));
                    if ($testUserMail < 1) {
                        if ($testUser < 1) {
                            echo "<div class=\"progress\" style='margin: 30px 0px;'>
                                      <div id='progressBar' class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                  </div>
                            ";
                            echo "<script src='js/inscription.js'></script>";
                            $likes = "";
                            foreach ($_POST as $key => $value){
                                if ($value == "on"){
                                    $likes .= $key.";";
                                }
                            }
                            //echo $likes;
                            //var_dump($_FILES);
                            addUser($_POST["eMail"], $_POST["pseudo"], sha1($_POST["passwd"]), $likes);
                        }
                        else {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                      Ce pseudo est déja utilisé, <a href='inscription.php'>réessayez</a>.
                                  </div>";
                        }
                    }
                    else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                                  Cette adresse mail est déja utilisée, <a href='inscription.php'>réessayez</a>.
                              </div>";
                    }
                }
            ?>
            <div class="form-group">
                <label for="mail">Email address</label>
                <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input name="passwd" type="password" class="form-control" id="passwd" placeholder="Password">
            </div>
<!--            <div class="form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--            </div>-->
            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
        </form>

        <?php
        setPub();
        ?>
    </body>
</html>
