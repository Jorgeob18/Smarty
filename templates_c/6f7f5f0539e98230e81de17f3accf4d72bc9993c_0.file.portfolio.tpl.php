<?php
/* Smarty version 4.3.1, created on 2023-04-01 01:20:08
  from 'C:\xampp\htdocs\Cursos\Proyectos\Smarty\views\portfolio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64276aa85e7f15_90739886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f7f5f0539e98230e81de17f3accf4d72bc9993c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Proyectos\\Smarty\\views\\portfolio.tpl',
      1 => 1680301763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64276aa85e7f15_90739886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187369963864276aa85e6624_08060749', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/layout.tpl");
}
/* {block "content"} */
class Block_187369963864276aa85e6624_08060749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187369963864276aa85e6624_08060749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- Page Title -->
  <div class="section section-breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Portfolio</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>We are leading company</h2>
          <h3>Specializing in Wordpress Theme Development</h3>
          <p>
            Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed
            mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique
            augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis.
          </p>

        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">

        <ul class="grid cs-style-2">
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/4.jpg" alt="img04">
              <figcaption>
                <h3>Settings</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/1.jpg" alt="img01">
              <figcaption>
                <h3>Camera</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/2.jpg" alt="img02">
              <figcaption>
                <h3>Music</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/5.jpg" alt="img05">
              <figcaption>
                <h3>Safari</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/3.jpg" alt="img03">
              <figcaption>
                <h3>Phone</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="img/portfolio/6.jpg" alt="img06">
              <figcaption>
                <h3>Game Center</h3>
                <span>Jacob Cummings</span>
                <a href="portfolio_item.php">Take a look</a>
              </figcaption>
            </figure>
          </div>
        </ul>


      </div>

      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>

    </div>
  </div>
<?php
}
}
/* {/block "content"} */
}
