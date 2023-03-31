<?php
/* Smarty version 4.3.1, created on 2023-04-01 00:37:22
  from 'C:\xampp\htdocs\Cursos\Smarty\views\portfolio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642760a261ae85_16334663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd893b93ecd804cc9733187920b80a9e34f9a40bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Smarty\\views\\portfolio.tpl',
      1 => 1680301763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642760a261ae85_16334663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_710951517642760a261a4b9_15808941', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/layout.tpl");
}
/* {block "content"} */
class Block_710951517642760a261a4b9_15808941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_710951517642760a261a4b9_15808941',
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
