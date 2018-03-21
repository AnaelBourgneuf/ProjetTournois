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

        <title>SpearITournament - Profil</title>

        <style>
            <?php
            setMenuStyle();
            setAssideStyle();
            setFormStyle();
            ?>

            #disconnect {
                float: right;
                margin: 15px;
                margin-right: 400px;
            }

            #pub {
                margin-top: 0px;
            }

            #boutons button {
                margin-top: 0px;
                margin-bottom: 1.5vh;
            }
        </style>
    </head>
    <body>
        <?php
        setMenu("Profil");

        if (isset($_SESSION["id"])){
            if (isset($_GET["id"])){

                if ($_SESSION["id"] == $_GET["id"]){
                    setAsside("profil");
                }
                else {
                    setAsside();
                }
            }
            else {
                echo "<p id='form'>Aucun utilisateur n'est précisé, retournez à la page  <a href='index.php'><button class='btn btn-primary mr-sm-2' type ='button'> Accueil </button></a></p>";
            }
        }
        else {
            echo "<p id='form'>Vous devez vous <a href='connexion.php'><button class='btn btn-warning mr-sm-2' type ='button'><img src = 'images/profile.png' style = 'width: 2vw'> Connecter </button></a> pour accéder a un profil d'utilisteur</p>";
        }

        ?>

    </body>
</html>