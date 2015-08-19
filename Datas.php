<?php

//require 'lib/Template.class.php';
//Verbbindung zur Datenbank aufbauen
$dsn = 'mysql:dbname=skriptprog;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$id = rand(1, 10);
//$tpl= new Template();
//$tpl->assign('teeext', $id);
//$tpl->display('templates/quiz.tpl');
$sth = $dbh->prepare('SELECT * FROM questions Where ID=:id');
//Platzhalter fuellen
$sth->bindparam(":id", $id);

//ausfuehren
$sth->execute();
$arr = $sth->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($arr[0]);
