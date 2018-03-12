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
                            echo "inscription.php";
                        }
                        echo "'><button class=\"btn btn-"; if ($page != "Profile"){ echo"outline-";} echo "warning mr-sm-2\" type=\"button\"><img src=\"images/profile.png\" style=\"width: 2vw\">";

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
    </nav>";
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





?>