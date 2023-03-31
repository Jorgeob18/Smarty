<?php
/* Smarty version 4.3.1, created on 2023-04-01 01:20:09
  from 'C:\xampp\htdocs\Cursos\Proyectos\Smarty\views\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64276aa9eac4a3_03008040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1525a13dffc43653037a71dccf31da6ee0173043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Proyectos\\Smarty\\views\\contact.tpl',
      1 => 1680302369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64276aa9eac4a3_03008040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131413066564276aa9eabb47_60470198', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/layout.tpl");
}
/* {block 'content'} */
class Block_131413066564276aa9eabb47_60470198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131413066564276aa9eabb47_60470198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- Page Title -->
  <div class="section section-breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-map">


    <div class="col-sm-12" style="padding:0;">
      <!-- Map -->
      <div id="contact-us-map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
          src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
          <a
            href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
      </div>
      <!-- End Map -->
    </div>


  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <h3>Get in Touch with Us</h3>
        </hr>
        <div class="col-sm-6">
          <!-- Contact Info -->
          <p class="contact-us-details">
            <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br />
            <b>Phone:</b> +44 123 654321<br />
            <b>Fax:</b> +44 123 654321<br />
            <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
          </p>
          <!-- End Contact Info -->
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div>
  </div>
<?php
}
}
/* {/block 'content'} */
}
