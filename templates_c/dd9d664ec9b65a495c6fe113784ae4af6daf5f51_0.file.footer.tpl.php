<?php
/* Smarty version 4.3.1, created on 2023-03-31 23:02:30
  from 'C:\xampp\htdocs\Cursos\Smarty\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64274a6623d1c0_84837481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd9d664ec9b65a495c6fe113784ae4af6daf5f51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Smarty\\templates\\footer.tpl',
      1 => 1680296548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64274a6623d1c0_84837481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146857413164274a66237d91_83493484', 'footer');
}
/* {block 'footer'} */
class Block_146857413164274a66237d91_83493484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_146857413164274a66237d91_83493484',
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
