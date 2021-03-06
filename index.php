<?php
session_start();


if (isset($_GET["disconnect"])){
    if ($_GET["disconnect"] == "TRUE"){
        $_SESSION["id"]=null;
        session_destroy();
    }
}
//$_SESSION["id"]="Anael";
//session_destroy();
include "fonctions.php";

if (isset($_GET["connexion"])){
    if (verifPasswd($_POST["mail"], $_POST["passwd"])){
        //echo "connecté";
        $_SESSION["id"] = getUserNickByMail($_POST["mail"]);
    }
}

if (isset($_GET["newEvent"])){
    if ($_POST["titre"] == ""){
        $_POST["titre"] = "Tournois";
    }
    $_POST["nbmin"] = intval($_POST["nbmin"]);
    $_POST["nbmax"] = intval($_POST["nbmax"]);
    //echo $_POST["nbmin"]."\n".$_POST["nbmax"];
    //echo $_POST["date"]." à ".$_POST["time"];
    addEventToBdd($_POST["titre"],$_POST["game"],$_POST["date"]." ".$_POST["time"],$_POST["modal"],$_POST["nbmin"],$_POST["nbmax"], $_SESSION["id"]);
    if (isset($_POST["participate"])){
        $ev_idList = getEventId();
        $ev_id = "";
        for ($i = 0; $i < sizeof($ev_idList); $i++){
            $ev_id = $ev_idList[$i]["ev_id"];
        }
        //var_dump($ev_id);
        if ($ev_id == null){
            echo "erreur de recuperation de l'evennement tout juste créé";
        }
        else {
            addContestant($_SESSION["id"], $ev_id);
        }
    }
}

$date = "";
if (isset($_GET["date"])){
    $date = $_GET["date"];
}
else {
    $date = date("n-Y");
}


$events = getEventsOfTheMonthInBDD($date);
$usableEvents = array();
for ($i = 0; $i < sizeof($events); $i++){
    $day = explode(" ",$events[$i]["ev_stamp"])[0];
    //var_dump($day);
    $usableEvents[$day] = array("name" => $events[$i]["ev_name"], "creator" => $events[$i]["ev_creator"], "id" => $events[$i]["ev_id"]);
}
//var_dump($usableEvents);
?>
<script>
    response = <?php echo json_encode($usableEvents); ?>;
</script>

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

    <script src="js/calendar.js"></script>

    <link rel="icon" type="image/png" href="images/pttlogo.png">

    <title>SpearITournament - Accueil</title>



    <style>
        <?php
        setMenuStyle();
        ?>

        /*pour le calendrier*/
        .day {
            text-decoration: none !important;
            color: black;
        }

        @media (max-width:575px) {
            .display-4 {
                font-size: 1.5rem;
            }
            .day h5 {
                background-color: #f8f9fa;
                padding: 3px 5px 5px;
                margin: -8px -8px 8px -8px;
            }

            .date {
                padding-left: 4px;
            }
        }

        @media (min-width: 400px) {
            .day {
                height: 13.4vh;
                min-height: 100px;
            }
        }

        .container-fluid {
            max-width: 80vw;
            float: left;
            margin-left: 1vw;
        }

        @media all and (max-width: 1250px) {
            .container-fluid {
                max-width: 96.2vw;
                float: none;
            }
        }

        <?php
        setAssideStyle();
        ?>

    </style>
</head>
<body>
    <?php
    setMenu("Accueil");
    ?>

    <div class="container-fluid">
        <header>
            <h4 style="text-align: center; margin: 1vh 0;"><a href="index.php?date=<?php echo getPreviousMonth($date)?>"><button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-right: 1vw;" id="moisMoins"><--</button></a> <span id="mois"><?php echo getMois(getSeparatedDate($date)[0])?></span> <span id="annee"><?php echo getSeparatedDate($date)[1]?></span> <a href="index.php?date=<?php echo getNextMonth($date)?>"><button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-left: 1vw;" id="moisPlus">--></button></a></h4>
            <div class="row d-none d-sm-flex p-1 bg-dark text-white" style="border-radius: 5px 5px 0px 0px;">
                <h5 class="col-sm p-1 text-center">Lundi</h5>
                <h5 class="col-sm p-1 text-center">Mardi</h5>
                <h5 class="col-sm p-1 text-center">Mercredi</h5>
                <h5 class="col-sm p-1 text-center">Jeudi</h5>
                <h5 class="col-sm p-1 text-center">Vendredi</h5>
                <h5 class="col-sm p-1 text-center">Samedi</h5>
                <h5 class="col-sm p-1 text-center">Dimanche</h5>
            </div>
        </header>
        <div class="row border border-right-0 border-bottom-0">
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">29</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">30</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">31</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">1</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">2</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">3</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">4</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <div class="w-100"></div>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">5</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">6</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">7</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">8</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">9</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">10</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">11</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <div class="w-100"></div>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">12</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">13</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">14</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">15</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">16</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">17</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">18</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <div class="w-100"></div>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">19</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">20</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">21</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">22</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">23</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">24</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">25</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <div class="w-100"></div>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">26</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">27</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">28</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">29</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">30</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">1</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">2</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <div class="w-100"></div>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">3</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">4</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">5</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">6</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">7</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">8</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
            <a class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">9</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </a>
        </div>
    </div>

    <?php
    setAsside();
    ?>
    </body>
</html>
