<?php
function setMenu($page){
    echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top\">
        <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item"; if ($page == "Accueil"){echo " active";} echo "\">
                    <a class=\"nav-link\" href=\"index.php\">Accueil</a>
                </li>
                <li class=\"nav-item"; if ($page == "Classements"){echo " active";} echo "\">
                    <a class=\"nav-link\" href=\"#\">Classements</a>
                </li>
                <li class=\"nav-item dropdown"; if ($page == "New"){echo " active";} echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Nouveau
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"newEvent.php\">Tournois</a>
                        <a class=\"dropdown-item\" href=\"#\">Ameliorations</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown"; if ($page == "Forum"){echo " active";} echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Forum
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Comment ça marche ?</a>
                        <a class=\"dropdown-item\" href=\"#\">Réclamations</a>
                    </div>
                </li>
                <li class=\"nav-item"; if ($page == "Apropos"){echo " active";} echo "\">
                    <a class=\"nav-link\" href=\"aPropos.php\">À propos</a>
                </li>
            </ul>
        </div>
        <div class=\"mx-auto order-0\">
            <a class=\"navbar-brand mx-auto\" href=\"index.php\"><img src=\"images/pttlogo.png\" style=\"width: 2vw;\"> SpearITournament <img src=\"images/rpttlogo.png\" style=\"width: 2vw;\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>
        <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
            <ul class=\"navbar-nav ml-auto\">
                <form class=\"form-inline\">
                    ";
                        if (!isset($_SESSION["id"])) {
                            echo "<a href='inscription.php'><button class=\"btn btn-sm btn-"; if ($page != "Inscription"){ echo"outline-";} echo "info mr-sm-2\" type=\"button\">Inscription</button></a>";
                        }
                    
                    echo "<a href='";
                        if (isset($_SESSION["id"])) {
                            echo "profile.php?id=".$_SESSION['id'];
                        }
                        else {
                            echo "connexion.php";
                        }
                        echo "'><button class=\"btn btn-"; if ($page != "Profil"){ echo"outline-";} echo "warning mr-sm-2\" type=\"button\"><img src=\"images/profile.png\" style=\"width: 2vw\">";

                        if (isset($_SESSION["id"])) {
                            echo $_SESSION["id"];
                        }
                        else {
                            echo "Connexion";
                        }
                        echo "
                    </button></a>
                </form>
            </ul>
            <form class=\"form-inline\">
                <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
}

function setMenuStyle(){
    echo "/*pour le nav*/
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
        }";
}


function setAssideStyle(){
    echo "#rightbottom {
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
        }";
}


function setAsside(){
    echo "<div id=\"rightbottom\">
        <div class=\"card\" id=\"pub\">
            <div class=\"card-body\">
                <h3 class=\"card-text\" style=\"text-align: center; font-weight: bold;\">Pear pub</h3>
            </div>
            <img class=\"card-img-top\" src=\"images/pearjeux.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">De nombreux jeux disponibles sur <a href=\"#\">pearjeux.fr</a></p>
            </div>
        </div>

        <div id=\"boutons\">
            <a href=\"newEvent.php\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Nouvel évènement</button></a>
        </div>

        <div id=\"suggest\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-text\" style=\"text-align: center; font-weight: bold;\">Tournois CS GO</h3>
                </div>
                <img class=\"card-img-top\" src=\"images/csgo.png\" alt=\"Card image cap\" style=\"width: auto; height: 6vh;\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Organisé par <a href=\"#\">Nitrrix</a></p>
                </div>
            </div>
        </div>
    </div>";
}

function setPub(){
    echo"<div class=\"card\" id=\"pub\">
            <div class=\"card-body\">
                <h3 class=\"card-text\" style=\"text-align: center; font-weight: bold;\">Pear pub</h3>
            </div>
            <img class=\"card-img-top\" src=\"images/pearjeux.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">De nombreux jeux disponibles sur <a href=\"#\">pearjeux.fr</a></p>
            </div>
        </div>";
}

function setPubStyle(){
    echo "
        .card {
            float: right;
            position : fixed;
            top : 100px;
            right : 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #pub img {
            width: 16vw;
            height: auto;
        }
        
        @media all and (max-width: 1250px) {
            #pub {
                margin-top: 5px;
            }
    
            #pub img {
                width: auto;
                height: 29vh;
            }
        }
        ";
}

function setFormStyle(){
    echo "#form {
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
        
        #submit {
            margin-top: 10px;
        }";
}

function getBDD(){
    try{
        return new PDO('mysql:host=localhost;dbname=spearitournament;charset=utf8', "root", "root");
    }
    catch(Exception $err){
        die("Debug: problème de bdd\n" . $err);
    }
}

function getUser($mail){
    $bdd = getBDD();
    return $bdd -> query("SELECT * FROM `user` WHERE user_email =". $mail) -> fetchAll(PDO::FETCH_ASSOC);
}

?>