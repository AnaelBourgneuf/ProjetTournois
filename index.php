<?php
include "fonctions.php";
if (isset($_SESSION["id"])) {
    session_start();

}
//$_SESSION["id"]="Anael";
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
    <title>SpearITournament - Accueil</title>



    <style>
        setMenuStyle();

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

        #rightbottom {
            width: 17vw;
            min-width: 200px;
            float: right;
            margin: 5px;
            padding: 5px;
        }

        #pub {
            margin-top: 45px;
        }

        #boutons {
            display: flex;
            flex-direction: column;
        }

        #boutons button {
            margin-top: 3vh;
        }

        #suggest {
            margin-top: 20px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #pub img {
            width: 16vw;
            height: auto;
        }

        @media all and (max-height: 950px) {
            #suggest {
                display: none;
            }
        }

        @media all and (max-width: 1250px) {
            .container-fluid {
                max-width: 96.5vw;
                float: none;
            }

            .card {
                margin-top: 0px;
            }

            #rightbottom {
                margin-left: 0.5vw;
                margin-top: 0px;
                display: block;
                width: 97.5vw;
                float: none;
                height: 50vh;
            }

            #pub {
                margin-top: 5px;
            }

            #pub img {
                width: auto;
                height: 29vh;
            }

            #suggest {
                display: block;
            }
        }

        button :hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
setMenu("Accueil");
?>

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
                <p class="d-sm-none">No events</p>
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
                <p class="d-sm-none">No events</p>
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
                <p class="d-sm-none">No events</p>
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

    <div id="rightbottom">
        <div class="card" id="pub">
            <div class="card-body">
                <h3 class="card-text" style="text-align: center; font-weight: bold;">Pear pub</h3>
            </div>
            <img class="card-img-top" src="images/pearjeux.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">De nombreux jeux disponibles sur <a href="#">pearjeux.fr</a></p>
            </div>
        </div>

        <div id="boutons">
            <a><button type="button" class="btn btn-primary btn-lg btn-block">Nouvel évènement</button></a>
        </div>

        <div id="suggest">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-text" style="text-align: center; font-weight: bold;">Tournois CS GO</h3>
                </div>
                <img class="card-img-top" src="images/csgo.png" alt="Card image cap" style="width: auto; height: 6vh;">
                <div class="card-body">
                    <p class="card-text">Organisé par <a href="#">Nitrix</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
