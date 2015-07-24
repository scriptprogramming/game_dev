<?php

require './lib/Template.class.php';
$tem = new Template();

try {
    $db = new PDO('mysql:dbname=scriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage(); //TODO
}

if ($_POST["PWfirst"] === $_POST["PWsecond"]) {
    
    $state = $db->prepare("SELECT pw FROM user WHERE name = :name");
    $state->bindParam(":name", $_SESSION["name"]);
    $state->execute();
    if(password_verify($_POST["PWold"], $state->fetch(0)[0]));

    $st = $db->prepare("UPDATE `user` SET `pw`=:pw WHERE `name` = :name");

    $hash = password_hash($_POST["PWfirst"], PASSWORD_DEFAULT);

    $st->bindParam(":name", $_SESSION["name"]);
    $st->bindParam(":pw", $hash);
    $st->execute();
    print_r($st->errorInfo());

    $tem->assign("Info", "Erfolgreich geändert");
    //$tem->display("./templates/profile.tpl");
} else {
    $tem->assign("Info", "Passwörter sind nicht gleich");
    $tem->display("./templates/profile.tpl");
}



