<!DOCTYPE HTML>

<html>
    <head>
        <title>{$title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./scripts/jquery-1.11.3.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>
    </head>
    <body>
        <div>
            <table>
                <td><form action="game.php">
                        <input type="submit" value="Play" />
                    </form></td>
                <td><form action="profile.php">
                        <input type="submit" value="Profile" />
                    </form></td>
                <td><form action="ranking.php">
                        <input type="submit" value="Ranking" />
                    </form></td>
                <td><form action="logout.php">
                        <input type="submit" value="Logout" />
                    </form></td>
            </table>
        </div>
        <br />
        <div>
            {$content}
        </div>
    </body>
</html>
