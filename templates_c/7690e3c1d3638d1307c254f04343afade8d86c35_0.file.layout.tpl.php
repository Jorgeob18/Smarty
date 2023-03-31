<?php
/* Smarty version 4.3.1, created on 2023-04-01 00:37:20
  from 'C:\xampp\htdocs\Cursos\Smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642760a0e7ff02_77731364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7690e3c1d3638d1307c254f04343afade8d86c35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Smarty\\templates\\layout.tpl',
      1 => 1680301750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_642760a0e7ff02_77731364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1942628551642760a0e7a8d1_75101316', "content");
?>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_1942628551642760a0e7a8d1_75101316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1942628551642760a0e7a8d1_75101316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
