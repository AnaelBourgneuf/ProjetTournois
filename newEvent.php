
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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

<form id="form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Titre">Titre du Tournoi :</label>
      <input type="text" class="form-control" id="Titre" placeholder="TournoiLand, Le Tournoi des geeks ....">
    </div>
    <div class="form-group col-md-6">
      <label for="">Jeux Proposés :</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="ex: Couter Strike Global Offensive, League of Legends ....">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date du Tournoi :</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Mode de jeu :</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Co-op, Solo, Contre la Montre, etc ...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nombre Maximum De Participants :</label>
      <input type="number" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nombre Minimum De Participants :</label>
      <input type="number" class="form-control">
    </div>
  <button type="submit" class="btn btn-primary">Valider Le Tournoi</button>
</form>

<?php
setPub();
?>
</body>
</html>