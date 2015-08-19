<?php

session_start();
require './lib/Template.class.php';
$tem = new Template();

if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] === "true") {
    try {
        $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
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

    $tem->assign("title", "Profile");
    $tem->assign("content", $tem->returnContent("./templates/profile.tpl"));

    $tem->display("./templates/mainTemplate.tpl");
} else {
    $tem->assign("Info", "Bitte loggen Sie sich ein");
    $tem->display("./templates/startpage.tpl");
}
