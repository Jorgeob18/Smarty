<?php
/* Smarty version 4.3.1, created on 2023-04-01 01:20:04
  from 'C:\xampp\htdocs\Cursos\Proyectos\Smarty\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64276aa41e51b1_35498842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f297619bfa4521ae4e4019abea57964cb4cf3c35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Proyectos\\Smarty\\templates\\footer.tpl',
      1 => 1680296548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64276aa41e51b1_35498842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140593066364276aa41e4bb1_43641661', 'footer');
}
/* {block 'footer'} */
class Block_140593066364276aa41e4bb1_43641661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_140593066364276aa41e4bb1_43641661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- Footer -->
  <div class="footer">
    <div class="container">

      <div class="row">

        <div class="col-footer col-md-4 col-xs-6">
          <h3>Contact Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>

        </div>
        <div class="col-footer col-md-4 col-xs-6">
          <h3>Our Social Networks</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>

        </div>
        <div class="col-footer col-md-4 col-xs-6">
          <h3>About Our Company</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Javascripts -->
  <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    window.jQuery || document.write('<?php echo '<script'; ?>
 src="js/jquery-1.9.1.min.js"><\/script>')
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <!-- Scrolling Nav JavaScript -->
  <?php echo '<script'; ?>
 src="js/jquery.easing.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/scrolling-nav.js"><?php echo '</script'; ?>
>

  </body>

  </html>
<?php
}
}
/* {/block 'footer'} */
}
