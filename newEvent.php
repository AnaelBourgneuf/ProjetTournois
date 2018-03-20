
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


    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="icon" type="image/png" href="images/pttlogo.png">

    <title>SpearITournament - New event</title>

    <style>
    <?php
    setMenuStyle();
    setPubStyle();
    setFormStyle();
    ?>

   
    </style>
</head>
<body>
<?php
setMenu("Event");

if (isset($_SESSION["id"])) {
    echo '<form id = "form" method = "post" action = "index.php?newEvent=TRUE" >
        <div class="form-row" >
            <div class="form-group col-md-12" >
                <label for="titre" > Titre du Tournoi :</label >
                <input type = "text" class="form-control" id = "titre" placeholder = "TournoiLand, Le Tournoi des geeks ...." name = "titre" >
            </div >
        </div >
    
        <div class="form-row" >
            <div class="form-group col-md-5" >
                <label for="game" > Jeux Proposés :</label >
                <input type = "text" class="form-control" id = "game" placeholder = "ex: Couter Strike Global Offensive, League of Legends ...." name = "game" required >
            </div >
            <div class="form-group col-md-5" >
                <label for="inputAddress2" > Mode de jeu :</label >
                <input type = "text" class="form-control" id = "mode" placeholder = "Co-op, Solo, Contre la Montre, etc ..." name = "modal" required >
            </div >
            <div class="form-check" style = "margin-top: 2.3em; margin-left: 2em;" >
                <input type = "checkbox" class="form-check-input" id="participate" name="participate">
                <label class="form-check-label" for="participate" > Participer</label >
            </div >
        </div >
    
        <div class="form-row" >
            <div class="form-group col-md-7" >
                <label for="date" > Date du Tournoi :</label >
                <input type = "date" class="form-control" id = "date" name = "date" required >
            </div >
            <div class="form-group col-md-5" >
                <label for="time" > Heure :</label >
                <input type = "time" class="form-control" id = "time" name = "time" required >
            </div >
        </div >
    
        <div class="form-row" >
            <div class="form-group col-md-5" >
                <label for="nbmin" > Nombre Minimum De Participants :</label >
                <input type = "number" class="form-control" min = "0" max = "99" name = "nbmin" required >
            </div >
            <div class="form-group col-md-5" >
                <label for="nbmax" > Nombre Maximum De Participants :</label >
                <input type = "number" class="form-control" id = "nbmax" min = "0" max = "99" name = "nbmax" required >
            </div >
            <button type = "submit" class="btn btn-primary" style = "height:2.5em; margin-top: 1.9em;" > Valider Le Tournoi </button >
        </div >
    </form >';
}
else {
    echo "<p id='form'>Vous devez vous <a href='connexion.php'><button class='btn btn-warning mr-sm-2' type ='button'><img src = 'images/profile.png' style = 'width: 2vw'> Connecter </button></a> pour créer un évennement</p>";
}


setPub();

//$bdd= getBDD();
//$newEvent=$bdd -> query ("INSERT INTO 'sprt_event'(ev_name,ev_creator,ev_contlist,ev_stamp,ev_cont_min,ev_cont_max,ev_game,ev_modal) VALUES($title,$game,$date,$modal,$nbmax,$nbmin) ")
?>
</body>
</html>