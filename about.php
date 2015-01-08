<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>MyCryptoChat</title>
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width" />
        <link href="styles/myCryptoChat.css" rel="stylesheet"/>

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
 <h2>About</h2>

<p>
    MyCryptoChat est un PHP crypté qui comprend une gestion de salles de chat. Tout est crypté sur le côté client, pour que personne ne puisse vous espionnez sur ce que vous dites.<br />
    <br />
    
    <a href="https://mycryptochatphp.codeplex.com/">Plus d'information ici.</a>
    <br /><br />
</p>
            </section>
        </div>
        <footer>
            <div class="content-wrapper">
                <div class="float-left">
                    <p>&copy; 2015 - MyCryptoChat <?php require 'inc/constants.php'; echo MYCRYPTOCHAT_VERSION; ?>.</p>
                </div>
            </div>
        </footer>

        <script src="scripts/jquery.js"></script>
    </body>
</html>
