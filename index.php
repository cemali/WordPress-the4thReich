<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        the4reich
 * @author         Matt Lee
 * @copyright      2015 - Holden Inc
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/the4reich/index.php
 */
 get_header(); ?>
 <?php get_sidebar(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<?php get_template_part('myContent'); ?>
 
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>   

<?php get_footer(); ?>