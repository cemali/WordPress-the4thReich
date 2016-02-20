<!DOCTYPE html>
<html <?php language_attributes('en-US'); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?></title>
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

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    

    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/styles.css" rel="stylesheet">

  <!--  <link href="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/bootstrap/bootstrap-theme.css" rel="stylesheet" > -->
  <!--  <link href="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/bootstrap/bootstrap-responsive.css" rel="stylesheet"> -->
   <!-- <link href="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/style.css" rel="stylesheet"> -->
  <!-- <link href="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/stylesheets/styles.css" rel="stylesheet"> -->
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery-1.11.3.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/bootstrap/carousel.js"></script>


   <!-- <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap.min.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/jquery-1.11.3.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/transition.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/alert.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/modal.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/dropdown.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/scrollspy.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/tab.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/tooltip.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/popover.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/button.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/collapse.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/carousel.js"></script>
    <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascripts/bootstrap/typeahead.js"></script> -->
      
       

  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


      
   

     <?php wp_enqueue_script("jquery"); ?>
    
    
    <?php wp_enqueue_style("styles.css"); ?>
 
   
       <?php wp_head(); ?>


  </head>
  
  
  
     
  
  
  
  
  
  

  <!-- body tag used to be here 12212015 -->
   <body>

       
  

<!-- header infor testing -->
<!--<div id="header-image">
    <a href="<-?php echo esc_url( home_url( '/' ) ); ?>" title="<-?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<-?php echo get_template_directory_uri(); ?>/images/favicon.png" alt="Logo" width="24" height="24" /> 
    </a>
 </div> -->

         
   <!--    <h1 id="header">
           <a href="<-?php bloginfo('url'); ?>"><-?php bloginfo('name'); ?></a>
       </h1>
       

         <a class="brand" href="<-?php echo site_url(); ?>"><-?php bloginfo('name'); ?></a> -->

   
   
   
<div id="header">
   <!-- <img src="//localhost/wordpress/site2/wp-content/themes/the4reich/images/rotate/star_wars_battlefront_1b.jpg") >  -->
    <!-- <img src ="//localhost/wordpress/site2/wp-content/themes/the4reich/images/rotate/rotate.php" alt="Header Image Ramdom"/> -->
    <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/rotate/rotate.php" alt="Header Image Ramdom"/>
   
        <div id="headerimg">
            <h1>
                <a href="<?php echo get_option('front-page'); ?>">                   
                 <?php bloginfo('name'); ?></a>
            </h1>
            <div class="description">
                 <?php bloginfo('description'); ?>
            </div>
               
         </div>
         <div>
            <?php
            if (is_user_logged_in()):
                echo 'Welcome, registered member!';
            else:
                echo 'Welcome, guest!';
            endif;
            ?>
         </div>
</div>
   
   
   
   
   
   

  <!-- header infor testing ends -->   
           
       
      <div class="navbar navbar-inverse navbar-fixed-top"> <!-- navbar bootstrap 2.0 doc -->
          <div class="navbar-inner">
              <div class="container-fluid">
                  <button type="button" class="btn btn-navbar pull-right" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!-- <a class="brand" href="index.php">The4threich</a> -->
                  <div class="nav-collapse collapse">
                      <p class="navbar-text pull-right">
                          Logged in as <a href="#" class="navbar-link">Username</a>
                      </p>

                      <a class="logo" href="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/" id="logo">
                          <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/faviconb.png" alt="The4threich logo" width="75" height="35"/>
                      </a>
                      <ul class="nav">
                          <!--  12172015 not working with span <li class="active"><a href="mySass_bootstrap/index.html"><span class="/fonts/bootstrap/glyphicons-halflings-regular glyphicon-home"></span> Home</a></li> -->
                          <li class="active"><a href="www.Holden4u.com/mywordpress/wp-content/themes/4reich/">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#contact">Contact</a></li>
                      </ul>
                  </div><!--/.nav-collapse -->
              </div>
          </div>
      </div>
  

   <!-- <div id="body-image">
    <a href="<-?php echo esc_url( home_url( '/' ) ); ?>" title="<-?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       <img src="<-?php echo get_template_directory_uri(); ?>/images/battlefield4/4th_images2b.jpg" alt="bodyImage" width="1596" height="400" />
    </a>
    </div> -->
    
  <!-- <div class="container"> -->