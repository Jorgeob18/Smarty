<?php
/* Smarty version 4.3.1, created on 2023-04-01 01:20:04
  from 'C:\xampp\htdocs\Cursos\Proyectos\Smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64276aa41d0c42_85284482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a540ba6c905efd3776e74a708b78fa8b6c1ff84f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Proyectos\\Smarty\\templates\\layout.tpl',
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
function content_64276aa41d0c42_85284482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114668915664276aa41d0267_77276573', "content");
?>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_114668915664276aa41d0267_77276573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114668915664276aa41d0267_77276573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
