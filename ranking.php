<?php

require './lib/Template.class.php';

$tpl = new Template();
$tplInner = new Template();

$tpl->assign('title', 'Ranking');
$tpl->assign('content', $tplInner->returnContent('templates/ranking.tpl'));

$tpl->display('templates/mainTemplate.tpl');
