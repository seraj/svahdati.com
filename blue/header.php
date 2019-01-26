<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa" dir="rtl">
<!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        <?php wp_title('&laquo;', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta name="googlebot" content="index, follow" />
    <meta name="robots" content="all" />
    <meta name="author" content="Seraj Vahdati">
    <meta name="description" content="طراحی حرفه ایی قالب وردپرس و صفحات وب" />
    <meta name="keywords" content="seraj vahdati,طراحی حرفه ایی وبسایت,طراحی قالب وردپرس,طراحي وب سايت,طراحی حرفه ایی قالب وردپرس,طراحی لوگو,طراحی بنر,web designer,seraj,vahdati,سراج وحدتی,طراحی قالب وردپرس,طراح قالب,سراج,وحدتی,طراحی سایت,طراحی حرفه ایی سایت,طراحی صفحات وب" />
    <link rel="copyright" href="http://www.svahdati.com" />
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="سراج وحدتی - طراح وب پارسی" />
    <meta property="og:description" content="یک طراح وب جوان" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://svahdati.com/share.jpg" />
    <meta property="og:url" content="http://svahdati.com/" />
    <meta property="og:site_name" content="Svahdati" />
    <!-- for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYNYwd2ruQeAihfzehAXODc3A3NQjcMDs&sensor=true"></script>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>


    <?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr-2.5.3-respond-1.1.0.min', get_stylesheet_directory_uri() .'/js/libs/modernizr-2.5.3-respond-1.1.0.min'); 
	wp_enqueue_script('jquery-1.7.2.min', get_stylesheet_directory_uri() .'/js/libs/jquery-1.7.2.min.js'); 
	//wp_enqueue_script('script', get_stylesheet_directory_uri() .'/js/script.js');
	wp_enqueue_script('jquery.easing.1.3', get_stylesheet_directory_uri() .'/js/libs/jquery.easing.1.3.js'); 
	wp_enqueue_script('jquery.quicksand', get_stylesheet_directory_uri() .'/js/libs/jquery.quicksand.js'); 
	wp_enqueue_script('jquery.prettyPhoto', get_stylesheet_directory_uri() .'/js/libs/jquery.prettyPhoto.js'); 
?>
</head>

<body>

    <div class="switcher">
        <ul>
            <li><a href="<?php bloginfo('url'); ?>?switch=Sv-red" class="red"></a></li>
            <li><a href="<?php bloginfo('url'); ?>?switch=Sv-blue" class="blue"></a></li>
            <li><a href="<?php bloginfo('url'); ?>?switch=Sv-green" class="green"></a></li>
            <li><a href="<?php bloginfo('url'); ?>?switch=Sv-violet" class="violet"></a></li>
        </ul>
        <div class="open-switcher">
            <img src="<?php bloginfo('template_url'); ?>/img/color-wheel.png" />
        </div>
    </div>


    <div id="wrapper">