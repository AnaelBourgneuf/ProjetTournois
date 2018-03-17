<?php
session_start();
//$_SESSION["id"]="Anael";
include "fonctions.php";

$date = "";
if (isset($_GET["date"])){
    $date = $_GET["date"];
}
else {
    $date = date("j-n-Y");
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

        <script src="js/day.js"></script>

        <title>SpearITournament - Day</title>

        <style>
            <?php
            setMenuStyle();
            setPubStyle();
            ?>

            #planner {
                margin: 10px;
                margin-top: 20px;
                width: 75vw;
            }
        </style>
    </head>
    <body>
        <?php
        setMenu("Day");
        $events = getEventsInBDD($date);
        //var_dump($events);
        //var_dump(getPreviousDate($_GET["date"]));
        ?>

        <div id="planner">
            <h4 style="text-align: center; margin: 1vh 0;"><a href="day.php?date=<?php echo getPreviousDate($date)?>"> <button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-right: 1vw;" id="jourMoins"><--</button></a> <?php echo getDateString($date) ?> <a href="day.php?date=<?php echo getNextDate($date)?>"><button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-left: 1vw;" id="jourPlus">--></button></a></h4>
            <?php
                for ($i = 0; $i < sizeof($events); $i++){
                    echo "<div class=\"row border\" style=\"border-radius: 20px; display: flex; flex-direction: column; align-items: center; padding: 0px 10px;\">
                              <a style=\"margin: 5px;\" class=\"btn btn-".choose(["primary","secondary","success","danger","warning","info"])." btn-lg btn-block\" title=\"".$events[$i]["ev_name"]."\">".$events[$i]["ev_name"]." organisé par ".$events[$i]["ev_creator"]."</a>
                          </div>";
                }
                if (sizeof($events) < 1) {
                    echo "<p>Aucun évennement à afficher.";
                }
            ?>
        </div>

        <?php
            setPub();
        ?>
    </body>
</html>