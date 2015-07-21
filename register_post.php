<?php
//Verbbindung zur Datenbank aufbauen
$dsn = 'mysql:dbname=skriptprog;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
//Insert Statemnet vorbereiten

$sth=$dbh->prepare('INSERT INTO benutzer (Benutzername, Passwort, Note) VALUES (:Benutzername, :Passwort, :Note)');
   //Platzhalter fuellen
    $sth->bindparam( ":Benutzername", $_POST['user'] );
    $sth->bindparam( ":Passwort", $_POST['pw'] );
    $sth->bindparam( ":Note", $_POST['note'] );
    //ausfuehren
    $sth->execute();


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

