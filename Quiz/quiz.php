<?php
require 'lib/Template.class.php';
$tpl= new Template();
$id=rand(1, 10);
$tpl->assign('teeext', $id);
$tpl->display('templates/quiz.tpl');
?>
