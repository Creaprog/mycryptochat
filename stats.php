<?php 
require 'inc/constants.php';
require 'inc/init.php';
require 'inc/functions.php';
require 'inc/classes.php';
require 'inc/dbmanager.php';

$dbManager = new DbManager();

$nbChatrooms = $dbManager->GetNbChatRooms();
$nbMessages = $dbManager->GetNbMessages();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>MyCryptoChat</title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width" />
    <link href="styles/myCryptoChat.css" rel="stylesheet" />
    <script src="scripts/modernizr.js"></script>
</head>
<body>
    <header>
        <div class="content-wrapper">
            <div class="float-left">
                <p class="site-title"><a href="index.php">MyCryptoChat</a></p>
            </div>
            <div class="float-right">
                <section id="login">
                </section>
                <nav>
                    <ul id="menu">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="stats.php">Statistique</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div id="body">
        <section class="content-wrapper main-content clear-fix">

            <h2>Les statistiques de MyCryptoChat</h2>

            <p>
                Nombre de salle de chat : <?php echo $nbChatrooms; ?><br />
                Nombre de messages: <?php echo $nbMessages; ?>
            </p>

        </section>
    </div>
    <footer>
        <div class="content-wrapper">
            <div class="float-left">
                <p>&copy; 2015 - MyCryptoChat <?php echo MYCRYPTOCHAT_VERSION; ?>.</p>
            </div>
        </div>
    </footer>
    <script src="scripts/jquery.js"></script>
</body>
</html>
