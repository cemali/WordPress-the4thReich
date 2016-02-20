<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sidebar Template
 *
 *
 * @file           sidebar.php
 * @package        the4reich
 * @author         Matt Lee
 * @copyright      2015 - Holden Inc
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/the4reich/sidebar.php
 */

/**
 * Adding widgets in sidebar using functions.php 01142016
 * Matt Lee
 */
/* get_header(); */
?> 

<!--<h2>Sidebar</h2> -->
<!--<div class="container-fluid" --> <!--INSIDE HEADER already -->
<div class="row-fluid"> 
 <div class="span3" id="mySpan3">
     <div class="well sidebar-nav"> <!-- sidebar names are red -->
         <ul class="nav nav-list">
             <li class="nav-header">Platforms</li>
             <li class="active"><a href="//localhost/wordpress/site2/">Home</a></li>
             <li><a href="#">PlayStation 4</a></li>
             <li><a href="#">PC Windows</a></li>
             <li><a href="#">Mobile</a></li>
             <li class="nav-header">Main Menu</li>
             <li><a href="//localhost/wordpress/site2/page-news">News</a></li>
             <li><a href="//localhost/wordpress/site2/page-staff">Staff</a></li>
             <li><a href="//localhost/wordpress/site2/page-forum">Forums</a></li>
             <li><a href="#">Chat</a></li>
             <li><a href="#">Terms of Use | Privacy Policy</a></li>          
             <li class="nav-header">Donate</li>
             <li><a href="#">Give What U can</a></li> 
            
         </ul>
     </div><!--/.well --> 
 </div><!-- navigation span ends -->
 

 
 <div id="side" class="sidebar"><!-- adding a widgets to the theme -->
     <ul>
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('MySideBar')) : ?>
         <?php endif; ?>
     </ul>
     <!-- <div id="4thLogin" class="login">
         <!?php wp_login_form($args); ?>
     </div> -->
     <form action ="http://localhost/wordpress/site2//" method="post">
         <label for="username">UserName:</label>
         <input type="text" name="username" required="required" /><br />
         <label for="password">Password:</label>
         <input type="password" name="password" required="required" />
         <input type="submit" value="Submit" />
     </form>
 </div>

 
     
     

 <!-- <div class="hero-unit" start here > -->

<!-- <div id="header" --> <!-- header starts -->



   <!--  </div --> <!-- visitor statement ends -->
<!-- </div -->  <!-- header ends -->
