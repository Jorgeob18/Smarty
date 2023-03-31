<?php
/* Smarty version 4.3.1, created on 2023-04-01 01:20:04
  from 'C:\xampp\htdocs\Cursos\Proyectos\Smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64276aa41dcc16_60187822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24df063aea9a9a08a221dad7db05c64a1131a8b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Cursos\\Proyectos\\Smarty\\templates\\header.tpl',
      1 => 1680302302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64276aa41dcc16_60187822 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link href="css/custom.css" rel="stylesheet">

  <?php echo '<script'; ?>
 src="//use.edgefonts.net/bebas-neue.js"><?php echo '</script'; ?>
>

  <!-- Custom Fonts & Icons -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <?php echo '<script'; ?>
 src="js/modernizr-2.6.2-respond-1.1.0.min.js"><?php echo '</script'; ?>
>


</head>

<body>
  <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Basica"></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li <?php echo $_smarty_tpl->tpl_vars['active1']->value;?>
><a href="index.php">Home</a></li>
          <li <?php echo $_smarty_tpl->tpl_vars['active2']->value;?>
><a href="about_us.php">About Us</a></li>
          <li <?php echo $_smarty_tpl->tpl_vars['active3']->value;?>
><a href="services.php">Services</a></li>
          <li <?php echo $_smarty_tpl->tpl_vars['active4']->value;?>
><a href="portfolio.php">Portfolio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown Menu 1</a></li>
              <li><a href="#">Dropdown Menu 2</a></li>
              <li><a href="#">Dropdown Menu 3</a></li>
              <li><a href="#">Dropdown Menu 4</a></li>
              <li><a href="#">Dropdown Menu 5</a></li>
              <li class="divider"></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
            </ul>
          </li>
          <li <?php echo $_smarty_tpl->tpl_vars['active5']->value;?>
><a href="blog.php">Blog</a></li>
          <li <?php echo $_smarty_tpl->tpl_vars['active6']->value;?>
><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </header>
<!--/header--><?php }
}
