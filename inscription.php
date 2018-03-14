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

    <title>SpearITournament - Inscription</title>

    <style>
        <?php
        setPubStyle();
        ?>

        #inscription {
            margin: 10px;
            width: 75vw;
        }

        .custom-checkbox {
            margin-right: 20px;
        }

        .custom-control-label {
            width: 250px;
            margin: 2px;
        }
    </style>
</head>

<body>
<?php
setMenu("Inscription");
?>

<form id="inscription">
    <div class="row">
        <div class="form-group col imput-group">
            <label for="pseudo">Pseudo</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo">
            </div>
        </div>
        <div class="form-group col">
            <label for="eMail">Adresse Email</label>
            <input type="email" class="form-control" id="eMail" aria-describedby="emailHelp" placeholder="blabla@exemple.fr" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col">
            <label for="CeMail">Confirmer Adresse Email</label>
            <input type="email" class="form-control" id="CeMail" placeholder="blabla@exemple.fr" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="passwd">Mot de passe</label>
            <input type="password" class="form-control" id="passwd" placeholder="Password">
        </div>
    </div>
    <p style="margin-top: 15px;">Avatar</p>
    <div class="row" style="margin: 0px 0px 15px 0px;">
        <div class="custom-file col">
            <label class="custom-file-label" for="avatar">Choisir Avatar</label>
            <input type="file" class="custom-file-input" id="avatar">
        </div>
    </div>
    <p style="margin-top: 30px;">Jeux préferés</p>
    <div class="row" style="margin: 0px 5px 30px 5px;">
        <?php
            $jeux = array("battleblock" => "BattleBlock Theatre", "brawlhalla" => "Brawlhalla", "chivalry" => "Chivalry: Medieval Warfare", "csGO" => "Counter Strike : Global Offensive", "csSource" => "Counter Strike Source", "gMod" => "Garry's Mod", "gearUp" => "Gear Up", "gta5" => "GTA V", "gunsOfIcarius" => "Guns of Icarius Online", "killingFloor" => "Killing Floor", "killingFloor2" => "Killing Floor 2", "l4d" => "Left 4 Dead", "l4d2" => "Left 4 Dead 2", "legoStarWars" => "Lego Star Wars", "portal" => "Portal", "portal2" => "Portal 2", "rocketLeague" => "Rocket League", "rust" => "RUST", "speedRunners" => "Speed Runners");
            foreach ($jeux as $key => $value){
                echo "
                    <div class=\"custom-control custom-checkbox col\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"".$key."\">
                        <label class=\"custom-control-label\" for=\"".$key."\">".$value."</label>
                    </div>
                    ";
            }
        ?>
    </div>
    <!--<div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>-->
    <button type="submit" class="btn btn-info">Confirmer</button>
</form>


<?php
setPub();
?>
</body>
</html>