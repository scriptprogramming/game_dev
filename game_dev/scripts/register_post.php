<?php
require '../lib/Template.class.php';
$tem = new Template();

try {
    $db = new PDO('mysql:dbname=skriptprog;host=127.0.0.1', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();//TODO
}

if($_POST["regPWfirst"] === $_POST["regPWsecond"]){
    $st = $db->prepare("INSERT INTO user VALUES(:name, :pw, 0");
    
    $hash = password_hash($_POST["regPWfirst"], PASSWORD_DEFAULT);
    
    $st->bindParam(":name", $_POST["regName"]);
    $st->bindParam(":pw", $hash);
    $tem->display("./templates/startpage.tpl");
}  else {
    echo 'fehler';//TODO
}

