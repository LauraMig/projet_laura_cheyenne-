<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
</head>

<body class="">

    <header class="barremenu">
        <!--Menu-->
        <nav class="parent-nav">
            <ul class="enfant-ul">
                <div class="sous-enfant-div1">
                    <a href="home.php"><img class="imgmenu" src=" img/logovenin.jpg" alt="logovenin"></a>
                    <h1 class="remedeanimale">Remèdes animales</h1>
                </div>
                <div class="sous-enfant-div2">

                    <li class="menu-li"><a class="lien1" href="home.php">Accueil</a></li>
                    <li class="menu-li"><a class="lien1" href="formconnexion.php">Connexion</a></li>
                    <li class="menu-li"><a class="lien1" href="forminscription.php">Inscription</a></li>
                    <?php
                        if(isset($_SESSION["user"]) and $_SESSION["user"]){echo '<li class="menu-li"><a class="lien1" href="logout.php">Déconnexion</a></li>';}
                    ?>
                    <li class="button-nuit-li"> <img src="img/imageNuitJour.jpg" alt="" class="buttonnuit" id="toggle-dark-mode" > </li>

                </div>
            </ul>
        </nav>
    </header>