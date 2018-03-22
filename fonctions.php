<?php
function setMenu($page){
    echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top\">
        <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item"; if ($page == "Accueil"){echo " active";} echo "\">
                    <a class=\"nav-link\" href=\"index.php\">Accueil</a>
                </li>";
//                <li class=\"nav-item"; if ($page == "Classements"){echo " active";} echo "\">
//                    <a class=\"nav-link\" href=\"#\">Classements</a>
//                </li>
                echo "<li class=\"nav-item dropdown"; if ($page == "New"){echo " active";} echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Nouveau
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"newEvent.php\">Tournois</a>";
//                        <a class=\"dropdown-item\" href=\"#\">Ameliorations</a>
                    echo "</div>
                </li>";
//                <li class=\"nav-item dropdown"; if ($page == "Forum"){echo " active";} echo "\">
//                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
//                        Forum
//                    </a>
//                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
//                        <a class=\"dropdown-item\" href=\"#\">Comment ça marche ?</a>
//                        <a class=\"dropdown-item\" href=\"#\">Réclamations</a>
//                    </div>
//                </li>
                echo "<li class=\"nav-item"; if ($page == "Apropos"){echo " active";} echo "\">
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
                            echo "profil.php?id=".$_SESSION['id'];
                        }
                        else {
                            echo "connexion.php";
                        }
                        echo "'><button class=\"btn btn-"; if ($page != "Profil"){ echo"outline-";} echo "warning mr-sm-2\" type=\"button\"><img src=\"uploads/".getProfileImageName()."\" style=\"width: 2vw\">";

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


        
        
        @media all and (max-width: 1300px) {

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


function setAsside($page = "index", $id = 1){
    //echo $id;
    echo "<div id=\"rightbottom\">";
    if ($page == "index") {
        echo "<div class=\"card\" id=\"pub\">
            <div class=\"card-body\">
                <h3 class=\"card-text\" style=\"text-align: center; font-weight: bold;\">Pear pub</h3>
            </div>
            <img class=\"card-img-top\" src=\"images/pearjeux.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">De nombreux jeux disponibles sur <a href=\"http://robin.ctexdev.net/team4/pearjeu/accueil.php\">pearjeux.fr</a></p>
            </div>
        </div>";
    };

        echo "<div id=\"boutons\">";
            if ($page == "profil"){
                echo "<a href=\"index.php?disconnect=TRUE\"><button type=\"button\" class=\"btn btn-danger btn-lg btn-block\">Logout</button></a>";
            }
            else if ($page == "join"){
                echo "<a href=\"event.php?join=TRUE&id=".intval($id)."\"><button type=\"button\" class=\"btn btn-success btn-lg btn-block\">Rejoindre</button></a>";
            }
            else if ($page == "quit"){
                echo "<a href=\"event.php?join=TRUE&id=".intval($id)."\"><button type=\"button\" class=\"btn btn-success btn-lg btn-block\">Rejoindre</button></a>";
            }
            echo "<a href=\"newEvent.php\"><button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Nouvel évènement</button></a>";


        echo "</div>";

    if ($page == "profil" or $page == "join" or $page == "quit") {
        echo "<div class=\"card\" id=\"pub\">
            <div class=\"card-body\">
                <h3 class=\"card-text\" style=\"text-align: center; font-weight: bold;\">Pear pub</h3>
            </div>
            <img class=\"card-img-top\" src=\"images/pearjeux.png\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"card-text\">De nombreux jeux disponibles sur <a href=\"http://robin.ctexdev.net/team4/pearjeu/accueil.php\">pearjeux.fr</a></p>
            </div>
        </div>";
    };


        echo "<div id=\"suggest\">
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
                <p class=\"card-text\">De nombreux jeux disponibles sur <a href=\"http://robin.ctexdev.net/team4/pearjeu/accueil.php\">pearjeux.fr</a></p>
            </div>
        </div>";
}

function setPubStyle(){
    echo "
        #pub {
            float: right;
            position : fixed;
            top : 100px;
            right : 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #pub img {
            width: 20vw;
            height: auto;
            margin: 5px;
        }
        
        @media all and (max-width: 1300px) {
            #pub {
                float: none;
                position : relative;
                top : 0px;
                right : 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 10px;
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
    echo "
        #form {
            float: left;
            margin: 10px;
            width: 77vw;
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
        }
        
        @media all and (max-width: 1300px) {
            #form {
                width: 94vw;
            }
        }
        ";
}

function choose($choices) {
    $index = random_int(0, sizeof($choices)-1);
    return $choices[$index];
}

function bisextile($annee) {
    if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
        return 1;
    }
    else {
        return 0;
    }
}

function jMax($mois, $annee) {
    $m = array(1,3,5,7,8,10,12);
    if ($mois == 2) {
        $b = bisextile($annee);
        if ($b == true) {
            return 29;
        }
        else {
            return 28;
        }
    }
    else if (in_array($mois, $m)) {
        return 31;
    }
    else {
        return 30;
    }
}

function getSeparatedDate($date, $car="-"){
    return explode($car,$date);
}

function getDateString($date){
    $explodedDate = getSeparatedDate($date);
    //var_dump($explodedDate);
    $dateStr = $explodedDate[0]." ".getMois(intval($explodedDate[1]))." ".intval($explodedDate[2]);
    return $dateStr;
}

function getPreviousMonth($date){
    $explodedDate = getSeparatedDate($date);
    for ($i = 0; $i < sizeof($explodedDate); $i++){
        $explodedDate[$i] = intval($explodedDate[$i]);
    }
    $explodedDate[0] -= 1;
    if ($explodedDate[0] < 1){
        $explodedDate[1] -= 1;
        $explodedDate[0] = 12;
    }
    return $explodedDate[0]."-".$explodedDate[1];
}

function getNextMonth($date)
{
    $explodedDate = getSeparatedDate($date);
    for ($i = 0; $i < sizeof($explodedDate); $i++) {
        $explodedDate[$i] = intval($explodedDate[$i]);
    }
    $explodedDate[0] += 1;
    if ($explodedDate[0] > 12) {
        $explodedDate[1] += 1;
        $explodedDate[0] = 1;
    }
    return $explodedDate[0] . "-" . $explodedDate[1];
}

function getPreviousDate($date) {
    $explodedDate = getSeparatedDate($date);
    for ($i = 0; $i < sizeof($explodedDate); $i++){
        $explodedDate[$i] = intval($explodedDate[$i]);
    }
    $explodedDate[0] -= 1;
    if ($explodedDate[0] < 1){
        $explodedDate[1] -= 1;
        if ($explodedDate[1] < 1){
            $explodedDate[2] -= 1;
            $explodedDate[1] = 12;
        }
        $explodedDate[0] = jMax($explodedDate[1], $explodedDate[2]);
    }
    return $explodedDate[0]."-".$explodedDate[1]."-".$explodedDate[2];
}

function getNextDate($date) {
    $explodedDate = getSeparatedDate($date);
    for ($i = 0; $i < sizeof($explodedDate); $i++){
        $explodedDate[$i] = intval($explodedDate[$i]);
    }
    $explodedDate[0] += 1;
    if ($explodedDate[0] > jMax($explodedDate[1], $explodedDate[2])){
        $explodedDate[1] += 1;
        $explodedDate[0] = 1;
        if ($explodedDate[1] > 12){
            $explodedDate[2] += 1;
            $explodedDate[1] = 1;
        }
    }
    return $explodedDate[0]."-".$explodedDate[1]."-".$explodedDate[2];
}

function getMois($intMois) {
    $tabMois = array("Janvier","Frévier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    return $tabMois[$intMois-1];
}

function getEvents($date) {
    $response = array("events" => array("12-3-2018" => "Anniversaire du créateur","20-3-2018" => "Tournois portal coop"), "status" => "OK");
    $events = array();
    $elements = $response["events"];
    foreach ($elements as $key => $value){
        if ($key == $date){
            $events[] = $value ;
        }
    }
    return $events;
}

function getDateToSend($date) {
    $chiffres = array("1","2","3","4","5","6","7","8","9","0");
    $splitedDate = explode("-", $date);
    $resdate = "";
    $resdate .= $splitedDate[2]."-";
    if (in_array($splitedDate[1], $chiffres)){
        $resdate .= "0".$splitedDate[1]."-";
    }
    else {
        $resdate .= $splitedDate[1]."-";
    }
    if (in_array($splitedDate[0], $chiffres)){
        $resdate .= "0".$splitedDate[0];
    }
    else {
        $resdate .= $splitedDate[0];
    }
    return $resdate;
}

function getMonthToSend($date){
    $splitedDate = getSeparatedDate($date);
    $chiffres = array("1","2","3","4","5","6","7","8","9","0");
    $resdate = "";
    $resdate .= $splitedDate[1]."-";
    if (in_array($splitedDate[0], $chiffres)){
        $resdate .= "0".$splitedDate[0];
    }
    else {
        $resdate .= $splitedDate[0];
    }
    return $resdate;
}

function getEventsInBDD($date) {
    $date = getDateToSend($date);
    //var_dump($date);
    $bdd = getBDD();
    $request = $bdd -> prepare("SELECT ev_name, ev_creator, ev_id FROM sprt_event WHERE ev_stamp LIKE \"".$date."%\" ORDER BY ev_stamp");
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getEventsOfTheMonthInBDD($date) {
    $date = getMonthToSend($date);
    //var_dump($date);
    $bdd = getBDD();
    $request = $bdd -> prepare("SELECT * FROM `sprt_event` WHERE ev_stamp LIKE \"%".$date."%\" ORDER BY ev_stamp");
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getEventById($id){
    $bdd = getBDD();
    $request = $bdd -> prepare("SELECT * FROM `sprt_event` WHERE ev_id = ".$id);
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getEventContestantsId($id){
    $bdd = getBDD();
    $request = $bdd -> prepare("SELECT user_pseudo, cont_score FROM `sprt_contestants` WHERE ev_id = ".$id);
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    return $result;
}

function getBDD(){
    try{
        return new PDO('mysql:host=localhost;dbname=spearitournament;charset=utf8', "root", "root");
    }
    catch(Exception $err){
        die("Debug: problème de bdd\n" . $err);
    }
}

function getUserByMail($mail){
    $bdd = getBDD();
    //var_dump($mail);
    $request = $bdd -> prepare("SELECT user_email FROM `sprt_user` WHERE user_email = \"".$mail."\"");
    $request ->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserByPseudo($pseudo){
    $bdd = getBDD();
    //var_dump($mail);
    $request = $bdd -> prepare("SELECT user_email FROM `sprt_user` WHERE user_nick = \"".$pseudo."\"");
    $request ->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserById($id){
    $bdd = getBDD();
    //var_dump($mail);
    $request = $bdd -> prepare("SELECT user_email FROM `sprt_user` WHERE user_id = \"".$id."\"");
    $request ->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addUser($mail, $nick, $passwd, $interest = null, $avatar = null, $admin = 0, $id = null){
    $bdd = getBDD();
    //echo $mail.", ".$nick.", ".$passwd.", ".$interest.", ".$avatar.", ".$admin.", ".$id;
    $request = $bdd -> prepare("INSERT INTO `sprt_user` (`user_id`, `user_email`, `user_interest`, `user_nick`, `user_isadmin`, `user_avatar`, `user_passwd`) VALUES (:id, :mail, :interest, :nick, :admin, :avatar, :passwd)");
    $request -> bindparam(":id", $id);
    $request -> bindparam(":mail", $mail);
    $request -> bindparam(":interest", $interest);
    $request -> bindparam(":nick", $nick);
    $request -> bindparam(":admin", $admin);
    $request -> bindparam(":avatar", $avatar);
    $request -> bindparam(":passwd", $passwd);
    $request ->execute();
}

function verifPasswd($mail, $passwd){
    $bdd = getBDD();
    //var_dump($mail);
    $request = $bdd -> prepare("SELECT user_passwd FROM `sprt_user` WHERE user_email = \"".$mail."\""."AND user_passwd = \"".sha1($passwd)."\"");
    $request ->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    if (sizeof($result) > 0) {
        return true;
    }
    return false;
}

function getUserNickByMail($mail){
    $bdd = getBDD();
    //var_dump($mail);
    $request = $bdd -> prepare("SELECT user_nick FROM `sprt_user` WHERE user_email = \"".$mail."\"");
    $request ->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    $nick = $result[0]["user_nick"];
    //var_dump($nick);
    return $nick;
}

function addEventToBDD($titre, $game, $date, $mode, $min, $max, $creator, $ev_id = null){
    $bdd = getBDD();
    $request = $bdd -> prepare("INSERT INTO `sprt_event` ( `ev_id`, `ev_name`, `ev_creator`, `ev_cont_min`, `ev_cont_max`, `ev_stamp`, `ev_game`, `ev_modal`) VALUES (:ev_id, :titre, :creator, :mini, :maxi, :datetime, :game, :mode)");
    $request -> bindParam(":ev_id", $ev_id);
    $request -> bindParam(":titre", $titre);
    $request -> bindParam(":creator", $creator);
    $request -> bindParam(":mini", $min);
    $request -> bindParam(":maxi", $max);
    $request -> bindParam(":datetime", $date);
    $request -> bindParam(":game", $game);
    $request -> bindParam(":mode", $mode);
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    if (sizeof($result) > 0) {
        return true;
    }
    return false;
}

function getEventId(){
    $bdd = getBDD();
    $request = $bdd -> prepare("SELECT * FROM sprt_event");
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    return $result;
}

function addContestant($pseudo, $eventId){
    $bdd = getBDD();
    $request = $bdd -> prepare("INSERT INTO `sprt_contestants` (`user_pseudo`, `ev_id`) VALUES (:pseudo, :ev_id)");
    $request -> bindParam(":pseudo", $pseudo);
    $request -> bindParam(":ev_id", $eventId);
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    if (sizeof($result) > 0) {
        return true;
    }
    return false;
}

function getProfileImageName() {
    if (isset($_SESSION["id"])) {
        $bdd = getBDD();
        $request = $bdd->prepare("SELECT user_avatar FROM sprt_user WHERE user_nick = \"".$_SESSION["id"]."\"");
        $request -> execute();
        $result = $request -> fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
        if (is_null($result[0]["user_avatar"])){
            return "profil.png";
        }
        else {
            return $result[0]["user_avatar"];
        }
    }
    else {
        return "profil.png";
    }
}

function getProfileImageNameById($id) {
    $bdd = getBDD();
    $request = $bdd->prepare("SELECT user_avatar FROM sprt_user WHERE user_id = \"".$id."\"");
    $request -> execute();
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    if (is_null($result[0]["user_avatar"])){
        return "profil.png";
    }
    else {
        return $result[0]["user_avatar"];
    }
}

function deleteContestant($pseudo, $eventId)
{
    $bdd = getBDD();
    $request = $bdd->prepare("DELETE FROM `sprt_contestants` WHERE :pseudo = user_pseudo AND :ev_id = ev_id");
    $request->bindParam(":pseudo", $pseudo);
    $request->bindParam(":ev_id", $eventId);
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    if (sizeof($result) > 0) {
        return true;
    }
    return false;
}
?>