<?php
session_start();
include "fonctions.php";
$event = null;
$contestants = null;
$name = null;
$creator = null;
$time = null;
$game=null;
if (isset($_GET["id"])){
    $event = getEventById($_GET["id"]);
    $contestants = getEventContestantsId($_GET["id"]);
    $name = $event[0]["ev_name"];
    $creator = $event[0]["ev_creator"];
    $time = $event[0]["ev_stamp"];
    $game = $event[0]["ev_game"];
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

    <title>SpearITournament - new Event</title>

    <style>
        <?php
            setMenuStyle();
            setPubStyle();
            setFormStyle();
        ?>



        .card-columns {
            @include media-breakpoint-only(lg) {
                column-count: 4;
            }
            @include media-breakpoint-only(xl) {
                column-count: 5;
            }
        }
    </style>
</head>
<body>
<?php
setMenu("");

if (isset($_GET["id"])){
    if (isset($_SESSION["id"])){
        //var_dump($event);
        echo '<div class="card-columns" id="form">
        <div class="card">
            ';//<img class="card-img-top" src="..." alt="Card image cap">
            echo '<div class="card-body">
                <h5 class="card-title">'.$game.'</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
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
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img" src="..." alt="Card image">
        </div>
        <div class="card p-3 text-right">
            <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>';
    }
    else{
        echo "<p id='form'>Vous devez vous <a href='connexion.php'><button class='btn btn-warning mr-sm-2' type ='button'><img src = 'images/profile.png' style = 'width: 2vw'> Connecter </button></a> pour accéder à un évennement</p>";
    }
    
    
}
else{
    echo "<div>
             <h2>Ce Tournoi n'existe pas <a href='newEvent.php'>créez le !</a></h2>
        </div>";

 }

?>




<?php
setPub();
?>
</body>
</html>

