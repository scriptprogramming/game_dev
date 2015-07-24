<?php

session_start();

require './lib/Template.class.php';
$tem = new Template();

try {
    $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
}

$query = "SELECT pw FROM user WHERE name = :name";
$st = $db->prepare($query);

$st->bindParam(":name", $_POST["logName"]);
$st->execute();

if (password_verify($_POST["logPW"], $st->fetch(0)[0])) {
    $_SESSION["logIn"] = "true";
    $_SESSION["name"] = $_POST["logName"];
    header("location:./quiz.php");
} else {
     $tem->assign("Info", "Ungültige Kombination von Benutzername und Password");
            $tem->display("./templates/startpage.tpl");
}
