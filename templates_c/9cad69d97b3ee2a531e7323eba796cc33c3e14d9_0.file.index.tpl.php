<?php
/* Smarty version 4.3.1, created on 2023-03-31 23:29:37
  from 'C:\xampp\htdocs\Cursos\Smarty\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642750c1dbad77_20736649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cad69d97b3ee2a531e7323eba796cc33c3e14d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Smarty\\views\\index.tpl',
      1 => 1680297461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642750c1dbad77_20736649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836645331642750c1db9f42_68702096', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/layout.tpl");
}
/* {block 'content'} */
class Block_836645331642750c1db9f42_68702096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_836645331642750c1db9f42_68702096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(img/slides/1.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="carousel-content centered">
                  <h2 class="animation animated-item-1">Welcome to BASICA! A Bootstrap3 Template</h2>
                  <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt. Phasellus vel sem
                    convallis, mattis est id, interdum augue. Integer luctus massa in arcu euismod venenatis. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.item-->
        <div class="item" style="background-image: url(img/slides/2.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="carousel-content center centered">
                  <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                  <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                  <br>
                  <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.item-->
        <div class="item" style="background-image: url(img/slides/3.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="carousel-content centered">
                  <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                  <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                    vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                  <br>
                  <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
      <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
      <i class="icon-angle-right"></i>
    </a>
  </section>
  <!--/#main-slider-->
<?php
}
}
/* {/block 'content'} */
}
