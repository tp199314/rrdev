<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="visible-xs">xs</div>
  <div class="visible-sm">sm</div>
  <div class="visible-md">md</div>
  <div class="visible-lg">lg</div>
  <div class="container">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bg1"></div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bg2"></div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bg3"></div>
    </div>
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="header-box">
          <div class="navbar-brand header-logo hidden-md"><a href="http://www.rheine-raptors.de"><img src="img/logo.png"></a></div>
          <div class="header-outerbox hidden-sm hidden-xs">
            <div class="header-innerbox hidden-sm hidden-xs">
              <span class="header-rheine hidden-sm hidden-xs">Rheine</span> <span class="header-raptors hidden-sm">Raptors</span>
            </div>
            <div class="header-slogan hidden-md hidden-sm hidden-xs">Eine Abteilung des TV Jahn Rheine 1885 e.V.</div>
          </div>
          <div class="header-since hidden-md hidden-sm hidden-xs">established 2008</div>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Seniors Football</a></li>
          <li><a href="#">Juniors Football</a></li>
          <li><a href="#">Jurassics Cheerleading</a></li>
          <li><a href="#">Allgemeines</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="img/slider.jpg" class="img-responsive">
      </div>
      <!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 bg1"></div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 bg2"></div>
      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 bg31"></div>
      <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 bg4"></div> -->
    </div>
    <div class="content right-border">