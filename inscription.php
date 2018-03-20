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

    <title>SpearITournament - Inscription</title>

    <style>
        <?php
        setPubStyle();
        setFormStyle();
        ?>



    </style>
</head>

<body>
<?php
setMenu("Inscription");
?>

<form id="form" method="post" action="connexion.php?inscription=TRUE" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col imput-group">
            <label for="pseudo">Pseudo</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input name="pseudo" type="text" class="form-control" id="pseudo" placeholder="Pseudo">
            </div>
        </div>
        <div class="form-group col">
            <label for="eMail">Adresse Email</label>
            <input name="eMail" type="email" class="form-control" id="eMail" aria-describedby="emailHelp" placeholder="blabla@exemple.fr" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col">
            <label for="CeMail">Confirmer Adresse Email</label>
            <input name="CeMail" type="email" class="form-control" id="CeMail" placeholder="blabla@exemple.fr" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="passwd">Mot de passe</label>
            <input name="passwd" type="password" class="form-control" id="passwd" placeholder="Password" required>
        </div>
    </div>
    <p style="margin-top: 15px;">Avatar</p>
    <div class="row" style="margin: 0px 0px 15px 0px;">
        <div class="custom-file col">
            <label class="custom-file-label" for="avatar">Choisir Avatar</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
            <input name="avatar" type="file" class="custom-file-input" id="avatar">
        </div>
    </div>
    <p style="margin-top: 30px;">Jeux préferés</p>
    <div class="row" style="margin: 0px 5px 30px 5px;">
        <?php
            $jeux = array("battleblock" => "BattleBlock Theatre", "brawlhalla" => "Brawlhalla", "chivalry" => "Chivalry: Medieval Warfare", "csGO" => "Counter Strike : Global Offensive", "csSource" => "Counter Strike Source", "gMod" => "Garry's Mod", "gearUp" => "Gear Up", "gta5" => "GTA V", "gunsOfIcarius" => "Guns of Icarius Online", "killingFloor" => "Killing Floor", "killingFloor2" => "Killing Floor 2", "l4d" => "Left 4 Dead", "l4d2" => "Left 4 Dead 2", "legoStarWars" => "Lego Star Wars", "portal" => "Portal", "portal2" => "Portal 2", "rocketLeague" => "Rocket League", "rust" => "RUST", "speedRunners" => "Speed Runners");
            foreach ($jeux as $key => $value){
                echo "
                    <div class=\"custom-control custom-checkbox col\">
                        <input name=\"".$key."\" type=\"checkbox\" class=\"custom-control-input\" id=\"".$key."\">
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
    <button type="submit" class="btn btn-info" id="submit">Confirmer</button>
    <script>

        //document.addEventListener('keydown', function(event) {
       //         checkMail();
       // }, false)


        var form = document.getElementById("form");
        form.onsubmit= checkMail;

        function checkMail(e) {
            var button = document.getElementById("submit");
            var eMail = document.getElementById("eMail");
            var eMail2 = document.getElementById("CeMail");
            var mail1 = eMail.value;
            var mail2 = eMail2.value;
            var mdp = document.getElementById("passwd");
            var mdpv = mdp.value;
            var pseudo = document.getElementById("pseudo").value;

            console.log("mail1 : "+mail1+" mail2 : "+mail2)
            if (mail1 != mail2){
                alert("les emails ne sont pas les mêmes.");
                return false;
            }
            if (mdpv.length < 6){
                alert("votre mot de passe doit faire au moins 6 caractères.");
                return false;
            }
            if (mdpv.indexOf("1") == -1 && mdpv.indexOf("2") == -1 && mdpv.indexOf("3") == -1 && mdpv.indexOf("4") == -1 && mdpv.indexOf("5") == -1 && mdpv.indexOf("6") == -1 && mdpv.indexOf("7") == -1 && mdpv.indexOf("8") == -1 && mdpv.indexOf("9") == -1 && mdpv.indexOf("0") == -1){
                alert("votre mot de passe doit contenir au moins un chiffre.");
                return false;
            }
            if (mdpv.indexOf("a") == -1 && mdpv.indexOf("b") == -1 && mdpv.indexOf("c") == -1 && mdpv.indexOf("d") == -1 && mdpv.indexOf("e") == -1 && mdpv.indexOf("f") == -1 && mdpv.indexOf("g") == -1 && mdpv.indexOf("h") == -1 && mdpv.indexOf("i") == -1 && mdpv.indexOf("j") == -1 && mdpv.indexOf("k") == -1 && mdpv.indexOf("l") == -1 && mdpv.indexOf("m") == -1 && mdpv.indexOf("n") == -1 && mdpv.indexOf("o") == -1 && mdpv.indexOf("p") == -1 && mdpv.indexOf("q") == -1 && mdpv.indexOf("r") == -1 && mdpv.indexOf("s") == -1 && mdpv.indexOf("t") == -1 && mdpv.indexOf("u") == -1 && mdpv.indexOf("v") == -1 && mdpv.indexOf("w") == -1 && mdpv.indexOf("x") == -1 && mdpv.indexOf("y") == -1 && mdpv.indexOf("z") == -1){
                if (mdpv.indexOf("A") == -1 && mdpv.indexOf("B") == -1 && mdpv.indexOf("C") == -1 && mdpv.indexOf("D") == -1 && mdpv.indexOf("E") == -1 && mdpv.indexOf("F") == -1 && mdpv.indexOf("G") == -1 && mdpv.indexOf("H") == -1 && mdpv.indexOf("I") == -1 && mdpv.indexOf("J") == -1 && mdpv.indexOf("K") == -1 && mdpv.indexOf("L") == -1 && mdpv.indexOf("M") == -1 && mdpv.indexOf("N") == -1 && mdpv.indexOf("O") == -1 && mdpv.indexOf("P") == -1 && mdpv.indexOf("Q") == -1 && mdpv.indexOf("R") == -1 && mdpv.indexOf("S") == -1 && mdpv.indexOf("T") == -1 && mdpv.indexOf("U") == -1 && mdpv.indexOf("V") == -1 && mdpv.indexOf("W") == -1 && mdpv.indexOf("X") == -1 && mdpv.indexOf("Y") == -1 && mdpv.indexOf("Z") == -1){
                    alert("votre mot de passe doit contenir au moins une lettre MAJUSCULE et une minuscule.");
                    return false;
                }
                alert("votre mot de passe doit contenir au moins une lettre minuscule.");
                return false;
            }
            if (mdpv.indexOf("A") == -1 && mdpv.indexOf("B") == -1 && mdpv.indexOf("C") == -1 && mdpv.indexOf("D") == -1 && mdpv.indexOf("E") == -1 && mdpv.indexOf("F") == -1 && mdpv.indexOf("G") == -1 && mdpv.indexOf("H") == -1 && mdpv.indexOf("I") == -1 && mdpv.indexOf("J") == -1 && mdpv.indexOf("K") == -1 && mdpv.indexOf("L") == -1 && mdpv.indexOf("M") == -1 && mdpv.indexOf("N") == -1 && mdpv.indexOf("O") == -1 && mdpv.indexOf("P") == -1 && mdpv.indexOf("Q") == -1 && mdpv.indexOf("R") == -1 && mdpv.indexOf("S") == -1 && mdpv.indexOf("T") == -1 && mdpv.indexOf("U") == -1 && mdpv.indexOf("V") == -1 && mdpv.indexOf("W") == -1 && mdpv.indexOf("X") == -1 && mdpv.indexOf("Y") == -1 && mdpv.indexOf("Z") == -1){
                alert("votre mot de passe doit contenir au moins une lettre MAJUSCULE.");
                return false;
            }
            if (pseudo.indexOf("<") != -1){
                alert("Stop FDP !");
                return false
            }
            return true;
        }
    </script>
</form>


<?php
setPub();
?>
</body>
</html>