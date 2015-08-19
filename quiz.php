<?php

require 'lib/Template.class.php';

session_start();

$tem = new Template();

if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] === "true") {
    $id = rand(1, 16);
    $tem->assign('teeext', $id);
    
    $tem->assign('title', 'QUIZ');
    $tem->assign('content', $tem->returnContent('templates/quiz.tpl'));
    
    $tem->display('templates/mainTemplate.tpl');
} else {
    $tem->assign("Info", "Bitte loggen Sie sich ein");
    $tem->display("./templates/startpage.tpl");
}
