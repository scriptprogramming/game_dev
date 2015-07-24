<?php
require 'lib/Template.class.php';
$tpl= new Template();
$counter=$_GET['count'];
$tpl->assign('teeext', $counter);
$tpl->display('templates/loose.tpl');
?>