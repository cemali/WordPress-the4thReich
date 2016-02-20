<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Front-Page Template
 *
 *
 * @file           front-page.php
 * @package        the4reich
 * @author         Matt Lee
 * @copyright      2015 - Holden Inc
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/the4reich/front-page.php
 */

get_header(); ?>

<?php get_sidebar();?>


<!-- </div> --> <!-- need div for sidebar 12/26/2015 -->
<?php get_template_part('myContent'); ?> <!-- using loging page --> 
<!-- <-?php get_template_part('login'); ?> testing mobile first --> 
        
<?php get_footer(); ?>    
 <!-- </div> -->
<!--12262015 works....no space on footer. moved before footer runs</div> -->
<!-- </div> -->
  <!-- <div> body was here  </div> -->
<!-- </body> -->
</html> 