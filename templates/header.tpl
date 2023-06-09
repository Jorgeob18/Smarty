<!DOCTYPE html>
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

  <title>{$title}</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
  <link href="css/custom.css" rel="stylesheet">

  <script src="//use.edgefonts.net/bebas-neue.js"></script>

  <!-- Custom Fonts & Icons -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


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
          <li {$active1}><a href="index.php">Home</a></li>
          <li {$active2}><a href="about_us.php">About Us</a></li>
          <li {$active3}><a href="services.php">Services</a></li>
          <li {$active4}><a href="portfolio.php">Portfolio</a></li>
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
          <li {$active5}><a href="blog.php">Blog</a></li>
          <li {$active6}><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </header>
<!--/header-->