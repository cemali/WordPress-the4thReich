
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>The4thReichb</title>

        <!-- Bootstrap -->
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <!--[endif]-->
    </head>
    
    
 <body>
     <h1>The4thReichb</h1>

      <!-- <div id="main"> -->
         
       

           
        <!--   <!?php get_header(); ?> -->

                         
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/javascript/bootstrap.min.js"></script>
       <!-- </div> -->
       
       <!--  12212015 not used right not not posting or fourms yet -->
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <!--<h1><-?php the_title(); ?></h1> -->	
               <?php the_content(); ?>


           <?php endwhile;
       else: ?>
           <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
       <?php endif; ?>
       
       
       
<!-- SIDEBAR WAS HERE -->
<?php get_sidebar(); ?>
 <!-- 12262015</div>  -->   
       <div class="span9"><!-- have 12 columns with 3 columns sidebar and 9 column hero-unit -->
       <!-- <div class="hero-unit"> -->
       <div class="container">
           <div id="this-carousel" class="carousel slide">
               <div class="carousel-inner">
                   <div class="item active">
                     <!-- 01062016  <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/battlefield4/4th_images2b.jpg" alt="battlefield4 image"> -->
                       <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/battlefield4/battlefield4_1b.jpg" alt="battlefield4 image"/>
                       <div class="carousel caption">
                            <p>Battlefield4.</p>
                       </div>
                   </div>   
                   <div class="item">
                       <!-- <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/rainbowSix/the4_images38b.jpg" alt="rainbowSix image"> -->
                       <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/rainbowSix/rainbowSix_1j.jpg" alt="rainbowSix image"/>

                       <div class="carousel caption">
                            <p>RainbowSix.</p>
                       </div>
                   </div>
                   <div class="item">
                    <!--   <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/starwars/the4_images20b.jpg" alt="starwars image"> -->
                        <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/starwars/star_wars_battlefront_1b.jpg" alt="starwars image"/>

                       <div class="carousel caption">
                            <p>StarWars Battlefront.</p>
                       </div>
                   </div>

                   <div class="item">
                       <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/minescraft/minecraft_1b.jpg" alt="minecraft image"/>
                       <!-- <img src="//localhost/wordpress/wp-content/themes/the4reich/images/starwars/the4_images20b.jpg" alt="starwars image"> -->
                       <div class="carousel caption">
                           <p>Minecraft.</p>
                       </div>
                   </div>


                   <p><a href="#" class="btn btn-primary btn-large">Want more Press Next;</a></p>
               </div><!-- end of hero-unit -->
               <!-- </div> -->
               <!-- "#this-carousel-id" -->
               <a class="carousel control left" href="#this-carousel" data-slide="prev">Prev;</a>
               <a class="carousel control right" href="#this-carousel" data-slide="next">Next;</a>
       </div>
       <div class="row-fluid">
           <div class="span10">
               <h2>Battlefield 4</h2>
               <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/battlefield4/the4_images7c.jpg" alt="battlefield4 image">
               <p>Conflict: Vietnam Preview</p>
               <p><a class="btn" href="#">Read More &raquo;</a></p>
           </div><!--/span-->
           <div class="span2">
               <p>PC - Coffee Tycoon Demo Released</p><p>Xbox - Dead or Alive Ultimate Tournament</p><p>PS4 - Namco announces Soul Calibur V</p>
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
       </div><!--/row-->
       <div class="row-fluid">
           <div class="span4">
               <h2>Soul Calibur 5 - Review</h2>
              <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/soul-calibur-5g.jpg" alt="soul-calibur 5 image">
               <p>Soul Calibur 5 is slated to be the best one yet!!! </p>
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
           <div class="span4">
               <h2>Become A Zombie Herder In Moving Hazard - Review</h2>
               <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/movinghazard1217-200c.jpg" alt="movinghazard1217 image">
               <p><a class="btn" href="#">Preview &raquo;</a></p>
           </div><!--/span-->
           <div class="span4">
               <h2>The Wither Storm - Rampages In Minecraft - Review</h2>
               <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/minescraftc.jpg" alt="minecraft image">
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
       </div><!--/row--> <!-- end of second row -->
       <div class="row-fluid">
           <div class="span8">
               <h2>You Are Being Watched: The Terrifying Paranoia of Rainbow Six Siege</h2>
               <p>I crouch in a dark corner of the parlor. My teammates are restless. They should be. A few minutes ago a camera on wheels rolled into our little hideout and saw each and every one of us, as well as the hostage we're guarding. We've erected steel walls, placed explosive traps all along the perimeter, and have our guns trained on every single entry point we can conceive of. They know where we are and they'll be here any second.  "We're so screwed," one of my teammates barks over the line. He's probably not wrong.

                   Suddenly the west wall goes down, smoke rises from the mouth of a grenade and bullets pour into the room, killing two of my pals. One of our foes' stray rounds tears through the hostage and just like that, in a matter of seconds, the matter is decided in our favor.

                   Rainbow Six Siege is a different kind of game.</p>
               <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/RainbowSix/RainbowSix610c.jpg" alt="RainbowSix610 image"><p></p>
               <img src="//www.Holden4u.com/mywordpress/wp-content/themes/the4reich/images/RainbowSix/Rappel610c.jpg" alt="RainbowSix610rappel image">
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
           <div class="span4">
               <p>by TheReaping1234, Wednesday, December, 16, 2015 at 06:03
                   I am really hoping this game wins shooter of the year from GI. It deserves it. One of the best shooters I have played in a very long time.</p>
              <!-- <p>Donec idsto sit amet risus. Etiam porta sei. </p> -->
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
           <!--/span-->
       </div><!--/row--> <!-- end of third row -->
       <div class="row-fluid">
           <div class="span4">
               <h2>Heading</h2>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
           <div class="span4">
               <h2>Heading</h2>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
           <div class="span4">
               <h2>Heading</h2>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
               <p><a class="btn" href="#">View details &raquo;</a></p>
           </div><!--/span-->
       </div><!--/row-->


        </div><!--/span-->
       
        
       

         <?php get_footer(); ?>

<!--1226015 </body> 
 
</html> -->
