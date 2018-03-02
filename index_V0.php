<?php
if (isset($_POST["id"])) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
}
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>spirITournament - connexion</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	
	<body>
        <div id="leftside">
            <div id="top">
                <header><img src="logo.png" id="logo"><br/><h1>spearITournament</h1></header>
                <div id="top-right">
                    <div id="ProfileLogin">
                        <div id="profilebutton">
                            <p>
                                <?php
                                if (isset($_SESSION)){
                                    echo "profile "+$_SESSION["id"];
                                }
                                else {
                                    echo "Connexion";
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="cut"></div>
                </div>
            </div>
            <div id="navbar">
                <div id="nav"></div>
                <div id="search"></div>
            </div>
        </div>
        <div id="rightside">

        </div>
	</body>
</html>