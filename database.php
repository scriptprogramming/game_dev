<?php

require '/lib/Database.class.php';

if (isset($_POST['action']) && $_POST['action'] == 'displayTable') {
    displayTable();
}

function displayTable() {

    $dbh = Database::getInstance();
    $sth = $dbh->prepare("Select * from user");
    $sth->execute();
    $arr = $sth->fetchAll();

    echo json_encode($arr);
}
