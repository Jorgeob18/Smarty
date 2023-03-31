<?php
include('Smarty/libs/Smarty.class.php');
$html = '
';
$smarty = new Smarty;
$smarty->assign('title','Acerca de Nosotros');
$smarty->assign('active2','class="active"');
$smarty->assign('active1','');
$smarty->assign('active3','');
$smarty->assign('active4','');
$smarty->assign('active5','');
$smarty->assign('active6','');

// $smarty->assign('content', $html);

$smarty->display('views/about_us.tpl');
?>