<?php
include('Smarty/libs/Smarty.class.php');
$html = '
';
$smarty = new Smarty;
$smarty->assign('title','Home');
$smarty->assign('active1','class="active"');
$smarty->assign('active2','');
$smarty->assign('active3','');
$smarty->assign('active4','');
$smarty->assign('active5','');
$smarty->assign('active6','');

// $smarty->assign('content', $html);

$smarty->display('views/index.tpl');
?>