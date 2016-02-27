<?php

// MY_SCRIPTS and MY_STYLES are running from the same function 
// Matt Lee
// 12/28/2015

/**
 * Proper way to enqueue scripts and styles
 */
//function theme_name_scripts() {
//    wp_enqueue_style('style-name', get_stylesheet_uri());
//    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true); for themes
//}

//add_action('wp_enqueue_scripts', 'theme_name_scripts');

function my_scripts() {
   if ( !is_admin() ) { // this if statement will insure the following code only gets added to your wp site and not the admin page cause your code has no business in the admin page right unless that's your intentions
      // jquery
      //wp_deregister_script('jquery'); // this deregisters the current jquery included in wordpress
      wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), false); // this registers the replacement jquery
      wp_enqueue_script('jquery'); // you can either let wp insert this for you or just delete this and add it directly to your template
      wp_enqueue_script('jquery', ("localhost/wordpress/site2/wp-content/themes/the4reich/javascripts/jquery-1.11.3.js"));
      
      // boostrap
      wp_enqueue_script('bootstrap', ("/wp-content/themes/the4reich/javascripts/bootstrap.js"), true);

      wp_enqueue_script('bootstrap.min', ("/wp-content/themes/the4reich/javascripts/bootstrap.min.js"), true); //
      wp_enqueue_script('button',("/wp-content/themes/the4reich/javascripts/bootstrap/button.js"), true); //
      wp_enqueue_script('transition', ("/wp-content/themes/the4reich/javascripts/bootstrap/transition.js"), true); //
      wp_enqueue_script('dropdown', ("/wp-content/themes/the4reich/javascripts/bootstrap/dropdown.js"), true); // 
      wp_enqueue_script('alert', ("/wp-content/themes/the4reich/javascripts/bootstrap/alert.js"), true); //
      wp_enqueue_script('collapse',("/wp-content/themes/the4reich/javascripts/bootstrap/collapse.js"), true); //
      wp_enqueue_script('carousel',("/wp-content/themes/the4reich/javascripts/bootstrap/carousel.js"), true);
      wp_enqueue_script('script',("/wp-content/themes/the4reich/javascripts/script.js"), true);



        //wp_register_script('dropdown', ( get_bloginfo('template_directory_uri') . '/javascripts/bootstrap/dropdown.js'), true); //
      
      
      //wp_register_script('alert', ( get_bloginfo('template_directory_uri') . '/javascripts/bootstrap/alert.js'), true); //
      
      
      //wp_register_script('carousel', ( get_bloginfo('template_directory_uri') . '/javascripts/bootstrap/carousel.js'), true); //
      
      
      //wp_register_script('collapse', ( get_bloginfo('template_directory_uri') . '/javascripts/bootstrap/collapse.js'), true); //
      

        // my scripts
      //wp_register_script('script', ( get_bloginfo('template_directory_uri') . '/javascripts/script.js'), true); //
      



        // not need delete wp_register_script('bootstrap-theme', ( get_bloginfo('template_directory_url') . '/bootstrap/bootstrap-theme.css'), false); //
        

        //wp_register_script('bootstrap-responsive', ( get_bloginfo('template_directory_url') . '/stylesheets/bootstrap-responsive.css'), false); //
       
        

        
        

        //wp_register_script('styles', ( get_bloginfo('template_directory_url') . '/stylesheets/styles.css'), false); //
        
        
        
        

        // your own script
      //wp_register_script('yourscript', ( get_bloginfo('template_url') . '/yourscript.js'), false); //first register your custom script
      //wp_enqueue_script('swfobject'); // then let wp insert it for you or just delete this and add it directly to your template

      // just in case your also interested
      //wp_register_script('yourJqueryScript', ( get_bloginfo('template_url') . '/yourJquery.js'), array('jquery')); // this last part-( array('jquery') )is added in case your script needs to be included after jquery
      //wp_enqueue_script('yourJqueryScript'); // then print. it will be added after jquery is added
    }
}
//add_action( 'wp_print_scripts', 'myscripts'); // now just run the function
add_action('wp_enqueue_scripts', 'my_scripts');

function the4threichslug_enqueue_style() {
   if ( !is_admin() ) { // this if statement will insure the following code only gets added to your wp site and not the admin page cause your code has no business in the admin page right unless that's your intentions
//     // style sheets
//   
//     // boostrap
//     wp_register_script('bootstrap.min', ( get_bloginfo('template_directory_url') . '/stylesheets/bootstrap.min.css'), false); //
//     wp_enqueue_script('bootstrap.min');
//     function themeslug_enqueue_style() {
//wp_enqueue_style( 'core', 'style.css', false );
//}


     //* * wp_enqueue_style( 'trailingslashit( get_template_directory_uri() )' . 'styles.css', false);
    wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri() . '/stylesheets/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme.min', get_stylesheet_directory_uri() . '/stylesheets/bootstrap-theme.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '../style.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/stylesheets/styles.css');
    
        // wp_enqueue_style('bootstrap', get_stylesheet_uri());
    // wp_enqueue_style('bootstrap-theme', get_stylesheet_directory_uri());
    // wp_enqueue_style('bootstrap-responsive',  get_stylesheet_uri());
    // wp_enqueue_style('styles',  get_stylesheet_uri());
    // wp_enqueue_style('style', get_stylesheet_uri());
//    
    }
}

if ( function_exists('register_sidebar')) register_sidebar(array('name' => 'MySideBar',
));

add_action('wp_enqueue_scripts', 'the4threichslug_enqueue_style', 'register_sidebar'); // now just run the function

add_action('loop_start', 'personal_message_when_logged_in');

function personal_message_when_logged_in() {

    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        echo 'Welcome ' . $current_user->user_login . '!';
    } else {
        echo 'Welcome, Guest !';
    }
}
function reich_user_logged_in_as() {
    if (is_user_logged_in()) {
        $reich_user = wp_get_current_user();
        echo ' Login as in ' . $reich_user->user_login ;
    }
}

// adding custom js script to the footer of a theme 
// Matt Lee 01152016


/// for the login sequence 

//function themeslug_enqueue_style() {
//    wp_enqueue_style('core', 'style.css', false);
//}

//function themeslug_enqueue_script() {
//    wp_enqueue_script('my-js', 'filename.js', false);
//}

//add_action('login_enqueue_scripts', 'themeslug_enqueue_style', 10);
//add_action('login_enqueue_scripts', 'themeslug_enqueue_script', 1);

function mlh_4r_chatroom_wp_footer() {
    echo 'I looking into developing web apps with WordPress, coming thru 4th theme functions and not plugin';
}

add_action('wp_footer', 'mlh_4r_chatroom_wp_footer');
