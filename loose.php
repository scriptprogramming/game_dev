<?php

require 'lib/Database.class.php';
require 'lib/Template.class.php';

session_start();

$tem = new Template();

if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] === "true") {
    $dbh = Database::getInstance();
    
    $sth = $dbh->prepare('SELECT `score` FROM `user` WHERE `name` = :name');
    $sth->bindParam(':name', $_SESSION['name']);
    $sth->execute();
    
    $counter = (int) $_GET['count'];
    
    if ($counter > $sth->fetch(0)[0])
    {
        $sth = $dbh->prepare('UPDATE `user` SET `score` = :score WHERE `name` = :name');
        $sth->bindParam(':score', $counter);
        $sth->bindParam(':name', $_SESSION['name']);
        $sth->execute();
    }

    $tem->assign('teeext', $counter);

    $tem->assign('title', 'QUIZ');
    $tem->assign('content', $tem->returnContent('templates/loose.tpl'));

    $tem->display('templates/mainTemplate.tpl');
} else {
    $tem->assign("Info", "Bitte loggen Sie sich ein");
    $tem->display("./templates/startpage.tpl");
}
