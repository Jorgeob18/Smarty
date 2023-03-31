<?php
/* Smarty version 4.3.1, created on 2023-03-31 22:18:37
  from 'C:\xampp\htdocs\Cursos\Smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427401dec2839_20953392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4660d62a6333bd35a474fbb501154feb38cfb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Smarty\\templates\\index.tpl',
      1 => 1680293916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6427401dec2839_20953392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
