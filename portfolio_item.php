<?php
include('Smarty/libs/Smarty.class.php');
$html = '
';
$smarty = new Smarty;
$smarty->assign('title','Portafolio');
$smarty->assign('active4','class="active"');
$smarty->assign('active2','');
$smarty->assign('active3','');
$smarty->assign('active1','');
$smarty->assign('active5','');
$smarty->assign('active6','');

// $smarty->assign('content', $html);

$smarty->display('views/portfolio_item.tpl');
?>