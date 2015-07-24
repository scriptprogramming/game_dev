<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        require './lib/Template.class.php';
        $tem = new Template();

        try {
            $db = new PDO('mysql:dbname=scriptprog;host=127.0.0.1', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage(); //TODO
        }
        
        $statement = $db->prepare("SELECT score From user WHERE name = :name");
        $statement->bindParam(":name", $_SESSION["name"]);
        $statement->execute();
        $points = $statement->fetch(0)[0];

        $tem->assign("Info", "");
        $tem->assign("name", $_SESSION["name"]);
        $tem->assign("punkte", $points);
        $tem->display("./templates/profile.tpl");
        ?>
    </body>
</html>

