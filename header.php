<!DOCTYPE html>
<!--[if IE 6]>
<html class="ie ie6 no-js">
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7 no-js">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html class="ie ie9 no-js">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js">
<!--<![endif]-->
<head>

  <!-- Meta -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="google-site-verification" content="oAe8GO-krofqHqaTEjLSU7thmIDJ58XAL8fSZ1ATTWo">
  <title><?php wp_title(); ?></title>

  <!-- CSS / link tags -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script src="//use.typekit.net/mqm0gwp.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="logo">
      <h1 class="name gamma">
        <a href="/"><?php echo get_bloginfo( 'name' ); ?></a> <a class="btn btn-small btn-true no-margin-bottom" href="/together">is accepting work!</a>
      </h1>
      <h2 class="tagline epsilon">
        <?php echo get_bloginfo( 'description' ); ?>
      </h2>
    </div>

    <nav>
      <ul class="nav">
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>

  <section class="main" role="main">