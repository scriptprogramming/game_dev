<!DOCTYPE HTML>

<html>
    <head>
        <title>{$title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./scripts/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>
        <link rel="stylesheet" href="./styles/generalStyle.css">
    </head>
    <body>
        <div>
            <table>
                <td><form action="game.php">
                        <input type="submit" value="Play" title="Spiel das Quiz" class="menu" />
                    </form></td>
                <td><form action="profile.php">
                        <input type="submit" value="Profil" title="Sieh dir dein Profil an" class="menu" />
                    </form></td>
                <td><form action="ranking.php">
                        <input type="submit" value="Bestenliste" title="Sieh dir den Highscore an" class="menu" />
                    </form></td>
                <td><form action="logout.php">
                        <input type="submit" value="Logout" title="Hier geht's raus" class="menu" />
                    </form></td>
            </table>
        </div>
        <br />
        <div>
            {$content}
        </div>
    </body>
</html>
