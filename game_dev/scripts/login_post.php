<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../lib/Template.class.php';
$tem = new Template();

try {
    $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
}

$query = "SELECT pw FROM user WHERE name = :name;";
$st = $db->prepare($query);

$st->bindParam(":name", $_POST["logName"]);
$st->execute();

if (password_verify($_POST["logPW"], $st->fetch())) {

    $tem->display("./templates/mainpage.tpl");
}