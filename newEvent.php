
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

    <script src="js/calendar.js" ></script>
    <title>SpearITournament - Event</title>

    <style>
    <?php
    setMenuStyle();
    setAssideStyle();
    ?>

    form {
        width : 60vw;
        margin : 1vw;
        margin-right: 1vw !important;
    }
    </style>
</head>
<body>
<?php
setMenu("Event");
?>

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Titre du Tournoi :</label>
      <input type="text" class="" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="">Jeux Proposés :</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="ex: Couter Strike Global Offensive">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date du Tournoi :</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mode de jeu :</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nombre Maximum De Participants :</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Valider Le Tournoi</button>
</form>

<?php
setAsside();
?>
</body>
</html>