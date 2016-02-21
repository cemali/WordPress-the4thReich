<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        the4reich
 * @author         Matt Lee
 * @copyright      2015 - Holden Inc
 * @license        license.txt
 * @version        Release: 1.1
 * @filesource     wp-content/themes/the4reich/header.php
 */
?>
<!DOCTYPE html>
<!--[if !IE]>
        <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>>
 <head>
   <!--  <meta charset= <!?php bloginfo('charset'); ?>> -->
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?></title>
    <!-- <title><!?php wp_title(); ?></title>  did not work 1-26-2016 -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   

    <!-- styles -->
    <style type="text/css">
      body {
        padding-top: 60px; /* bootstrap 2.0 update */
        padding-bottom: 40px;
      }
      .sidebar-nav { /* inside the body top/bottom */
        padding: 9px 0; 
      } /* padding for bootstrap 2.0 */

     /* @media (max-width: 980px) { */
     @media (max-width: 1280px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="//localhost/wordpress/wp-content/themes/the4reich/bootstrap/bootstrap.css" rel="stylesheet" >
    <link href="//localhost/wordpress/wp-content/themes/the4reich/bootstrap/bootstrap-theme.css" rel="stylesheet" > 
    <link href="//localhost/wordpress/wp-content/themes/the4reich/bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <link href="//localhost/wordpress/wp-content/themes/the4reich/style.css" rel="stylesheet">
    <link href="//localhost/wordpress/wp-content/themes/the4reich/stylesheets/styles.css" rel="stylesheet">
    
    <!-- <link href="stylesheets/bootstrap-responsive.css" rel="stylesheet"> --> <!-- using bootstrap 2.0 newest -->
    <!-- <link rel="stylesheets" href="styles.css"> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <!-- <link rel="shortcut icon" href="../assets/ico/favicon.png"> no need -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery-1.11.3.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/bootstrap/carousel.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/script.js"></script>
    
    
  <!-- <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap.min.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/jquery-1.11.3.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/botstrap/transition.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/alert.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/modal.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/dropdown.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/scrollspy.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/tab.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/tooltip.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/popover.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/button.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/collapse.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/carousel.js"></script>
    <script src="//localhost/wordpress/wp-content/themes/the4reich/javascripts/bootstrap/typeahead.js"></script> -->
      
       

  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


      
   

     <?php wp_enqueue_script("jquery"); ?>
    <?php wp_enqueue_style("styles.css"); ?>
  <!-- <-?php wp_enqueue_scripts("my_scripts"); ?> -->
   
       <?php wp_head(); ?>
 <!-- HEAD ENDS -->
 </head><!-- HEAD tag was here ENDS -->
 <body><!-- BODY STARTS -->

 <div class="navbar navbar-inverse navbar-fixed-top"> <!-- navbar bootstrap 2.0 doc -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar pull-right" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="//localhost/wordpress/site2/">The4threich</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <!--Logged in as <a href="#" class="navbar-link">Username</a> -->
                    Logged in as <a href="#" class="navbar-link"><?php (reich_user_logged_in_as() ) ?></a>
                </p>

                <a class="logo" href="//localhost/wordpress/site2/" id="logo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/faviconb.png" width="75" height="35" alt="The4threich logo" />
                </a>
                <ul class="nav">

                    <li class="active"><a href="//localhost/wordpress/site2">Home</a></li>
                    <li><a href="//localhost/wordpress/site2/page-about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="nav_desktopVersion"><a href="#">PlayStation</a></li>
                    <li class="nav_desktopVersion"><a href="#">PC Windows</a></li>
                    <li class="nav_desktopVersion"><a href="#">News</a></li>
                    <li class="nav_desktopVersion"><a href="#">Staff</a></li>
                   <!--  <li class="nav_desktopVersion"><a href="#">Forums</a></li> -->
                   <li class="nav_desktopVersion"><a href="//the4threich.freeforums.net" target = _blank >Forums</a></li>
                    <li class="nav_desktopVersion"><a href="#">Chat</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
</div> 
<!-- placing header here -->
<div class="container-fluid"> <!-- container-fluid starts -->  
  <!-- body tag used to be here 12212015 -->
<!-- header infor testing -->   
   
 <div id="header">
    

    <a class="me" href="#">
    <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/rotate/rotate.php" id="hdr_pic" alt="Header Image Ramdom"/>
    </a>
        <div id="headerimg">
            <h1>
                <a href="<?php echo get_option('front-page'); ?>">                   
                 <?php bloginfo('name'); ?></a>
            </h1>
            <div class="description">
                 <?php bloginfo('description'); ?>
            </div>
               
         </div>
         <div id="welcome_message">
            <?php
                /* personal message for login members coming from the functions.php */
              (personal_message_when_logged_in())
           ?>
         </div>
</div>
  <!-- header infor testing ends -->   
    
  <!-- <div class="container"> -->