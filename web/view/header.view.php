<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>D  oYo  K</title>

    <!-- Bootstrap -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="?hal=home"><img id="logo1" src="img/doyok-pagi.png" height="100%"></a>
    </div>
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <div>
	      <ul class="nav navbar-nav navbar-right">
        <?php foreach($menu as $menus):?>
				<?php if($menus == 'keluar'):?>
					<li><a href="" data-toggle="modal" data-target="#logout"><?=$menus?></a></li>
				<?php else:?>
					<li><a href="?hal=<?=$menus?>"><?=$menus?></a></li>
				<?php endif;?>
			  <?php endforeach;?>
	      </ul>
	    </div>
	  </div>
  </div>
</nav>
<div class="clearfix"></div>