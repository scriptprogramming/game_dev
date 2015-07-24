<?php

require './lib/Database.class.php';

try {
    $dbh = Database::getInstance();

    $sth = $dbh->prepare("SELECT `name`, `score` FROM `user` ORDER BY `user`.`score` DESC");
    $sth->execute();

    $datas = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($datas);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
    
