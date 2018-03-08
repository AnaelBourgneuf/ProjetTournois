<?php
if (isset($_SESSION["id"])) {
    session_start();
}
//$_SESSION["id"]="Anael";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="js/calendar.js" ></script>
    <title>Hello, world!</title>



    <style>
        /*pour le nav*/
        @media (max-width: 123px) {
            .navbar-header {
                float: none;
            }
            .navbar-toggle {
                display: block;
            }
            .navbar-collapse {
                border-top: 1px solid transparent;
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
            }
            .navbar-collapse.collapse {
                display: none!important;
            }
            .navbar-nav {
                float: none!important;
                margin: 7.5px -15px;
            }
            .navbar-nav>li {
                float: none;
            }
            .navbar-nav>li>a {
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .navbar-text {
                float: none;
                margin: 15px 0;
            }
            /* cette classe est à ajouter lorsque que vous utilisez une version de Bootstap supérieure ou égale à la 3.1.0 */
            .navbar-collapse.collapse.in {
                display: block!important;
            }
            .collapsing {
                overflow: hidden!important;
            }
        }

        /*pour le calendrier*/
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

        .card {
            width: 17vw;
            min-width: 200px;
            float: right;
            margin: 5px;
            padding: 5px;
            margin-top: 48px;
        }

        @media all and (max-width: 1250px) {
            .container-fluid {
                max-width: 96.5vw;
            }

            .card {
                margin-top: 10px;
            }
        }

        button :hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="//codeply.com">Codeply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classements</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nouveau
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Tournois</a>
                        <a class="dropdown-item" href="#">Ameliorations</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Comment ça marche ?</a>
                        <a class="dropdown-item" href="#">Réclamations</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"><img src="pttlogo.png" style="width: 2vw;"> SpearITournament <img src="rpttlogo.png" style="width: 2vw;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <form class="form-inline">
                    <?php
                        if (!isset($_SESSION["id"])) {
                            echo "<button class=\"btn btn-sm btn-outline-info mr-sm-2\" type=\"button\">Inscription</button>";
                        }
                    ?>
                    <button class="btn btn-outline-warning mr-sm-2" type="button"><img src="images/profile.png" style="width: 2vw">
                        <?php
                        if (isset($_SESSION["id"])) {
                            echo $_SESSION["id"];
                        }
                        else {
                            echo "Connexion";
                        }
                        ?>
                    </button>
                </form>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <header>
            <h4 style="text-align: center; margin: 1vh 0;"><button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-right: 1vw;" id="moisMoins"><--</button> <span id="mois">Mars</span> <span id="annee">2018</span> <button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-left: 1vw;" id="moisPlus">--></button></h4>
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
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">29</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">30</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">31</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">1</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">2</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">3</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white" title="Test Event 1">Test Event 1 <!--<i class="material-icons">person</i>--></a>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">4</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="w-100"></div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">5</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">6</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">7</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">8</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-success text-white" title="Test Event 2">Test Event 2</a>
                <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-danger text-white" title="Test Event 3">Test Event 3</a>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">9</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">10</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">11</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="w-100"></div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">12</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">13</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">14</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">15</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">16</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">17</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">18</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="w-100"></div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">19</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">20</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-primary text-white" title="Test Event with Super Duper Really Long Title">Tournois Portal Coop</a>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">21</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">22</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">23</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">24</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">25</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="w-100"></div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">26</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">27</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">28</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">29</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                <h5 class="row align-items-center">
                    <span class="date col-1">30</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">1</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">2</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="w-100"></div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">3</span>
                    <small class="col d-sm-none text-center text-muted">Lundi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">4</span>
                    <small class="col d-sm-none text-center text-muted">Mardi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">5</span>
                    <small class="col d-sm-none text-center text-muted">Mercredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">6</span>
                    <small class="col d-sm-none text-center text-muted">Jeudi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">7</span>
                    <small class="col d-sm-none text-center text-muted">Vendredi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">8</span>
                    <small class="col d-sm-none text-center text-muted">Samedi</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
            <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                <h5 class="row align-items-center">
                    <span class="date col-1">9</span>
                    <small class="col d-sm-none text-center text-muted">Dimanche</small>
                    <span class="col-1"></span>
                </h5>
                <p class="d-sm-none">No events</p>
            </div>
        </div>
    </div>

    <div class="card" >
        <div class="card-body">
            <h3 class="card-text" style="text-align: center; font-weight: bold;">Pear pub</h3>
        </div>
        <img class="card-img-top" src="images/pearjeux.png" alt="Card image cap" style="width: 16vw; height: auto; min-width: 190px;">
        <div class="card-body">
            <p class="card-text">De nombreux jeux disponibles sur <a href="#">pearjeux.fr</a></p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
