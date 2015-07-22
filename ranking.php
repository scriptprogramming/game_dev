<?php

require './lib/Database.class.php';
require './lib/Template.class.php';

$tpl = new Template();

try {
    $dbh = Database::getInstance();
    $sth = $dbh->prepare("SELECT `name`, `score` FROM `user` ORDER BY `user`.`score` DESC");
    $sth->execute();

    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
            $tpl->assign($name, $row[$key]);
        }
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$tpl->display('templates/ranking.tpl');
