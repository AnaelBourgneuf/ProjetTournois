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

    <title>SpearITournament - À propos</title>
</head>
<body>
<?php
setMenu("Apropos");
?>
<h2>À propos du site</h2>

<p>Ce site permet (ou plutôt permetra vu l'état actuel) d'organiser des tournois ou des concours avec vos amis comme avec des inconus. Ceci sur les jeux de votre choix.
Sur la page d'accueil vous pouvez voir tout les evennements prévus, en cours et passés. Vous pouvez acceder aux informations les concernant et aux profils des participants par des liens successifs.
La force de ce site est son ouverture à n'importe quel jeu. Que vous voulier jouer en contre la montre pour voir qui fait le meilleur score ou vous affronter en 1V1, c'est possible.</p>

<h2>Qui sommes nous ?</h2>

<p>Nous (les créateurs) sommes une équipe de développeur en carton, en première année d'études d'informatique à l'IMIE de Caen. Pour notre projet nous devions mettre en place un site ou une application utilisant une base de donnée et le voici.</p>
</body>
</html>