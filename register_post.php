<?php

require './lib/Template.class.php';
$tem = new Template();

try {
    $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage(); //TODO
}
if(strlen($_POST["regPWfirst"])<3){
            $tem->assign("Info", "Das Password muss 3 oder mehr Zeichen lang sein");
            $tem->display("./templates/startpage.tpl");
            exit();
}

if(strlen($_POST["regName"])<3){
            $tem->assign("Info", "Der Name muss 3 oder mehr Zeichen lang sein");
            $tem->display("./templates/startpage.tpl");
            exit();
}

if ($_POST["regPWfirst"] === $_POST["regPWsecond"]) {
    $state = $db->prepare("SELECT name FROM user");
    $state->execute();
    foreach ($state as $value) {
        if ($value[0] === $_POST["regName"]) {
            $tem->assign("Info", "Name vergeben. Groß-/Kleinschreibung wird nicht berücksichtigt");
            $tem->display("./templates/startpage.tpl");
            exit();
        }
    }

    $st = $db->prepare("INSERT INTO user VALUES(:name, :pw, 0)");

    $hash = password_hash($_POST["regPWfirst"], PASSWORD_DEFAULT);

    $st->bindParam(":name", $_POST["regName"]);
    $st->bindParam(":pw", $hash);
    $st->execute();

    $tem->assign("Info", "Erfolgreich registriert");
    $tem->display("./templates/startpage.tpl");
} else {
    $tem->assign("Info", "Passwörter sind nicht gleich");
    $tem->display("./templates/startpage.tpl");
}



