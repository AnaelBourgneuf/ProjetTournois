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

        <title>SpearITournament - Profil</title>

        <style>
            #disconnect {
                float: right;
                margin: 15px;
            }
        </style>
    </head>
    <body>
        <?php
        setMenu("Profil");
        ?>

        <a href="index.php?disconnect=TRUE" id="disconnect"><button type="button" class="btn btn-lg btn-outline-danger">Disconnect</button></a>

    </body>
</html>