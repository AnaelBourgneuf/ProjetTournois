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
        $events = getEvents($_GET["date"]);
        //var_dump($events);



        ?>
        <div id="planner">
            <h4 style="text-align: center; margin: 1vh 0;"><button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-right: 1vw;" id="jourMoins"><--</button> <?php echo getDateString($_GET["date"]) ?> <button style="border-radius: 10px; border: 1px solid black; background-color: #f5f5f5; margin-left: 1vw;" id="jourPlus">--></button></h4>
            <div class="row border" style="border-radius: 20px; display: flex; flex-direction: column; align-items: center; padding: 0px 10px;">
                <a style="margin: 5px;" class="btn btn-primary btn-lg btn-block" title="Anniversaire du créateur">Anniversaire du créateur</a>
            </div>
        </div>

        <?php
            setPub();
        ?>
    </body>
</html>