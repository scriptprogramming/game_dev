<?php

session_start();
if (isset($_SESSION["logIn"]) && $_SESSION["logIn"] === "true") {
    header("location:./ranking.php");
}
require './lib/Template.class.php';
$tem = new Template();
$tem->assign("Info", "");
$tem->display("./templates/startpage.tpl");
?>
