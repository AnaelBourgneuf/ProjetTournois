
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

    <title>SpearITournament - Event</title>

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
  
?>

<form id="form" method="post" action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Titre">Titre du Tournoi :</label>
      <input type="text" class="form-control" id="Titre" placeholder="TournoiLand, Le Tournoi des geeks ...." name="title">
    </div>
    <div class="form-group col-md-6">
      <label for="">Jeux Proposés :</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="ex: Couter Strike Global Offensive, League of Legends ...." name="game" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date du Tournoi :</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="" name="date">
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Mode de jeu :</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Co-op, Solo, Contre la Montre, etc ..." name="modal">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nombre Maximum De Participants :</label>
      <input type="number" class="form-control" id="inputCity" min="0" name="nbmax">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nombre Minimum De Participants :</label>
      <input type="number" class="form-control" min="0" name="nbmin">
    </div>
  <button type="submit" class="btn btn-primary" style="height:3em; margin-top: 1.5em;">Valider Le Tournoi</button>
</form>

<?php
setPub();

if (isset($_POST["title"])){
  $title=$_POST["title"];
}
if (isset($_POST["game"])){
  $game=$_POST["game"];
}
if (isset($_POST["date"])){
  $date=$_POST["date"];
}
if (isset($_POST["modal"])){
  $modal=$_POST["modal"];
}
if (isset($_POST["nbmax"])){
  $nbmax=$_POST["nbmax"];
}
if (isset($_POST["nbmin"])){
  $nbmin=$_POST["nbmin"];
}

$bdd= getBDD();
$newEvent=$bdd -> query ("INSERT INTO 'sprt_event'(ev_name,ev_creator,ev_contlist,ev_stamp,ev_cont_min,ev_cont_max,ev_game,ev_modal) VALUES($title,$game,$date,$modal,$nbmax,$nbmin) ")
?>
</body>
</html>