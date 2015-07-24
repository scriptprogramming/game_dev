<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
    </body>
</html>
