<?php
session_start();
include "fonctions.php";



if (isset($_GET["join"])){
    addContestant($_SESSION["id"], $_GET["id"]);
}

if (isset($_GET["quit"])){
    deleteContestant($_SESSION["id"], $_GET["id"]);
}

if (isset($_POST)){
    var_dump($_POST);
}

$event = null;
$contestants = null;
$name = null;
$creator = null;
$time = null;
$game=null;
$nbmax=null;
if (isset($_GET["id"])){
    $event = getEventById($_GET["id"]);
    //echo $_GET["id"];
    $contestants = getEventContestantsId($_GET["id"]);
    //var_dump($contestants);
    $name = $event[0]["ev_name"];
    $creator = $event[0]["ev_creator"];
    $time = $event[0]["ev_stamp"];
    $game = $event[0]["ev_game"];
    $mode = $event[0]["ev_modal"];
    $nbmax=$event[0]["ev_cont_max"];
}
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

    <title>SpearITournament - Event</title>

    <style>
        <?php
            setMenuStyle();
            setAssideStyle();
            setFormStyle();
        ?>

        /*#rightbottom {*/
            /*position: relative;*/
            /*top : -470px;*/
        /*}*/

        .card-columns {
            @include media-breakpoint-only(lg) {
                column-count: 4;
            }
            @include media-breakpoint-only(xl) {
                column-count: 5;
            }
        }

        /*@media all and (max-width: 1300px){*/
            /*#rightbottom {*/
                /*position: relative;*/
                /*top: 0px;*/
            /*}*/
        /*}*/
    </style>
</head>
<body>
<?php
setMenu("");

if (isset($_GET["id"])){
    if (isset($_SESSION["id"])){
        //var_dump($time);
        echo '<div class="card-columns" id="form">
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>'.$name.'</p>
                        <footer class="blockquote-footer text-white">
                            <small class="text-white">
                                Organisé par <cite title="Source Title"> '.$creator.'</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    ';//<img class="card-img-top" src="..." alt="Card image cap">
                    echo '<div class="card-body">
                        <h5 class="card-title">'.$game.'</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <h5>Mode de jeu :</h5>
                        <p class="card-text">'.$mode.'</p>
                    </blockquote>
                </div>
                <div class="card">
                    ';//<img class="card-img-top" src="..." alt="Card image cap">
                echo '<div class="card-body">
                        <h5 class="card-title">Liste des Participants :</h5>
                        <p class="card-text">';
                        for ($i=0;$i<sizeof($contestants);$i++){
                            echo $contestants[$i]["user_pseudo"].", ";
                        }
                        echo '</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Résultats :</h5>
                            <div>';
                //var_dump($contestants);
                                for ($i = 0; $i < sizeof($contestants); $i++){
                                    echo "<form class='card-text row' action='event.php?id=".$_GET["id"]."' method='post'> 
                                            <div class='form mb-1 col' style='width: 10em;'>
                                                <label for=\"pseudo\" class=\"sr-only\">".$contestants[$i]["user_pseudo"]."</label>
                                                <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"".$contestants[$i]["user_pseudo"]."\" name=\"".$contestants[$i]["user_pseudo"]."\" value=\"".$contestants[$i]["user_pseudo"]."\">
                                            </div>
                                            <div class=\"form mx-sm-3 mb-1 col\">
                                                <label for=\"score\" class=\"sr-only\">".$contestants[$i]["cont_score"]."</label>
                                                <input type=\"number\" class=\"form-control\" id=\"score".$contestants[$i]["user_pseudo"]."\" name=\"score".$contestants[$i]["user_pseudo"]."\" placeholder=\"".$contestants[$i]["cont_score"]."\">
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-primary mb-2 col\">Envoyer</button>
                                          </form>";
                                }
                            echo '</div>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                ';//<div class="card">
                    ;//<img class="card-img" src="..." alt="Card image">
             //</div>
             echo '<div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <h5>Nombre maximum de participants : </h5>
                        <footer class="blockquote-footer">
                                '.$nbmax.'
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Date/heure :</h5>
                        <p class="card-text">'.$time.'</br></p>
                        <p class="card-text"><small class="text-muted">Année-Mois-Jour Heure</small></p>
                    </div>
                </div>
            </div>';
     //var_dump($_GET["id"]);
        $inscrit = false;
        for ($i = 0; $i < sizeof($contestants); $i++){
            if ($_SESSION["id"] == $contestants[$i]["user_pseudo"]){
                $inscrit = true;
            }
        }
        if ($inscrit){
            setAsside("quit", $_GET["id"]);
        }
        else {
            setAsside("join", $_GET["id"]);
        }
    }
    else{
        echo "<p id='form'>Vous devez vous <a href='connexion.php'><button class='btn btn-warning mr-sm-2' type ='button'><img src = 'images/profile.png' style = 'width: 2vw'> Connecter </button></a> pour accéder à un évennement</p>";
        setAsside();
    }
    
    
}
else{
    echo "<div>
             <h2>Ce Tournoi n'existe pas <a href='newEvent.php'>créez le !</a></h2>
        </div>";
        setAsside();
 }

?>
</body>
</html>

