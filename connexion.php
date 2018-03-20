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

        <link rel="icon" type="image/png" href="images/pttlogo.png">

        <title>SpearITournament - Connexion</title>

        <style>
            <?php
            setPubStyle();
            setFormStyle();
            ?>

        </style>
    </head>

    <body>
        <?php
        setMenu("Profil");
        ?>

        <form id="form" method="post" action="index.php?connexion=TRUE">
            <?php
                if (isset($_GET["inscription"])) {
                    //var_dump($_POST);
                    $testUserMail = sizeof(getUserByMail($_POST["eMail"]));
                    $testUser = sizeof(getUserByPseudo($_POST["pseudo"]));
                    if ($testUserMail < 1) {
                        if ($testUser < 1) {
                            echo "<div class=\"progress\" style='margin: 30px 0px;'>
                                      <div id='progressBar' class=\"progress-bar progress-bar-striped progress-bar-animated bg-warning\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                  </div>
                            ";
                            echo "<script src='js/inscription.js'></script>";
                            $likes = "";
                            foreach ($_POST as $key => $value){
                                if ($value == "on"){
                                    $likes .= $key.";";
                                }
                            }
                            $target_dir = "uploads/";
                            $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            $target_file = $target_dir.$_POST["pseudo"].".".$imageFileType;
                            // Check if image file is a actual image or fake image
                            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                            // Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["avatar"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                                    echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                            //echo $likes;
                            addUser($_POST["eMail"], $_POST["pseudo"], sha1($_POST["passwd"]), $likes, $_POST["pseudo"].".".$imageFileType);
                        }
                        else {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                      Ce pseudo est déja utilisé, <a href='inscription.php'>réessayez</a>.
                                  </div>";
                        }
                    }
                    else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">
                                  Cette adresse mail est déja utilisée, <a href='inscription.php'>réessayez</a>.
                              </div>";
                    }
                }

            ?>
            <div class="form-group">
                <label for="mail">Email address</label>
                <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input name="passwd" type="password" class="form-control" id="passwd" placeholder="Password">
            </div>
<!--            <div class="form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--            </div>-->
            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
        </form>

        <?php
        setPub();
        ?>
    </body>
</html>
