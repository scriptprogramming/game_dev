<?php

require './lib/Template.class.php';

session_start();

$tem = new Template();

try {
    $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
}

$statement = $db->prepare("SELECT score From user WHERE name = :name");
$statement->bindParam(":name", $_SESSION["name"]);
$statement->execute();
$points = $statement->fetch(0)[0];

$tem->assign("name", $_SESSION["name"]);
$tem->assign("punkte", $points);

$tem->assign("title", "Profile");
$tem->assign("content", $tem->returnContent("./templates/profile.tpl"));

if ($_POST["PWfirst"] === $_POST["PWsecond"]) {

    $state = $db->prepare("SELECT pw FROM user WHERE name = :name");
    $state->bindParam(":name", $_SESSION["name"]);
    $state->execute();
    if (password_verify($_POST["PWord"], $state->fetch(0)[0])) {

        $st = $db->prepare("UPDATE `user` SET `pw`=:pw WHERE `name` = :name");

        $hash = password_hash($_POST["PWfirst"], PASSWORD_DEFAULT);

        $st->bindParam(":name", $_SESSION["name"]);
        $st->bindParam(":pw", $hash);
        $st->execute();

        $tem->assign("Info", "Erfolgreich geändert");
    } else {
        $tem->assign("Info", "Falsches Password");
    }
} else {
    $tem->assign("Info", "Passwörter sind nicht gleich");
}
$tem->display("./templates/mainTemplate.tpl");
