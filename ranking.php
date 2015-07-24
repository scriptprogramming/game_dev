<?php

require './lib/Template.class.php';

session_start();

$tem = new Template();
if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] === "true") {

    $tem->assign('title', 'Ranking');
    $tem->assign('content', $tem->returnContent('templates/ranking.tpl'));

    $tem->display('templates/mainTemplate.tpl');
} else {
    $tem->assign("Info", "Bitte loggen Sie sich ein");
    $tem->display("./templates/startpage.tpl");
}
