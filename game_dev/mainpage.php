<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        require './lib/Template.class.php';
        $tem = new Template();
        
        if(isset($_SESSION["logIn"])&& $_SESSION["logIn"] === "true"){

        $tem->display("./templates/mainpage.tpl");
        }else{
           $tem->assign("Info", "Bitte loggen sie sich ein");
           $tem->display("./templates/startpage.tpl");
        }
        ?>
    </body>
</html>

