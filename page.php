<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Page Template
 *
 *
 * @file           page.php
 * @package        the4reich
 * @author         Matt Lee
 * @copyright      2015 - Holden Inc
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/the4reich/page.php
 */

get_header();?>

<?php get_header(); ?>
<?php get_sidebar(); ?>  
        </div><!--/span-->
        <div class="span9"><!-- have 12 columns with 3 columns sidebar and 9 column hero-unit -->
          <!-- <div class="hero-unit"> -->
          <div class="container">
          <div id="this-carousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                   <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/battlefield4/battlefield4_1b.jpg" alt="battlefield4 image"/>
                  <!-- <img src="images/battlefield4/4th_images2b.jpg" alt="battlefield4 image"> -->
                  <div class="carousel caption">
                       <p>Battlefield4.</p>
                  </div>
              </div>   
             <div class="item">
                   <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/rainbowSix/rainbowSix_1j.jpg" alt="rainbowSix image"/>
                 <!-- <img src="images/rainbowSix/the4_images38b.jpg" alt="rainbowSix image"> -->
                  <div class="carousel caption">
                       <p>RainbowSix.</p>
                  </div>
              </div>
                <div class="item">
                      <img src = "<?php bloginfo('stylesheet_directory'); ?>/images/minescraft/minecraft_1b.jpg" alt="minecraft image"/>
                    <div class="carousel caption">
                         <p>Minecraft.</p>
                    </div>
                </div>

            <p><a href="#" class="btn btn-primary btn-large">Want more? press next;</a></p>
          </div><!-- end of hero-unit -->
          <!-- </div> -->
          <!-- "#this-carousel-id" -->
          <a class="carousel control left" href="#this-carousel" data-slide="prev">Prev;</a>
          <a class="carousel control right" href="#this-carousel" data-slide="next">Next;</a>
          </div>
          </div>
          <div class="row-fluid">
            <div class="span10">
              <h2>Battlefield 4</h2>
             <!-- <p> </p> -->
              <img src="images/battlefield4/the4_images7c.jpg" alt="battlefield4 image">
              <p>Conflict: Vietnam Preview</p>
              <p><a class="btn" href="#">Read More &raquo;</a></p>
            </div><!--/span-->
            <div class="span2">
              <!-- <h2>Heading</h2> -->
              <p>PC - Coffee Tycoon Demo Released</p><p>Xbox - Dead or Alive Ultimate Tournament</p><p>PS4 - Namco announces Soul Calibur V</p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <!--<div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Soul Calibur 5 - Review</h2>
              <img src="images/soul-calibur-5g.jpg" alt="soul-calibur 5 image">
              <p>Soul Calibur 5 is slated to be the best one yet!!! </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Become A Zombie Herder In Moving Hazard - Review</h2>
              <img src="images/movinghazard1217-200c.jpg" alt="movinghazard1217 image">
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
              <p><a class="btn" href="#">Preview &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>The Wither Storm - Rampages In Minecraft - Review</h2>
              <img src="images/minescraftc.jpg" alt="minecraft image">
              <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row--> <!-- end of second row -->
          <div class="row-fluid">
              <div class="span8">
                  <!--<h2>Heading</h2> -->
                  <h2>You Are Being Watched: The Terrifying Paranoia of Rainbow Six Siege</h2>
                  <p>I crouch in a dark corner of the parlor. My teammates are restless. They should be. A few minutes ago a camera on wheels rolled into our little hideout and saw each and every one of us, as well as the hostage we're guarding. We've erected steel walls, placed explosive traps all along the perimeter, and have our guns trained on every single entry point we can conceive of. They know where we are and they'll be here any second.  "We're so screwed," one of my teammates barks over the line. He's probably not wrong.

                  Suddenly the west wall goes down, smoke rises from the mouth of a grenade and bullets pour into the room, killing two of my pals. One of our foes' stray rounds tears through the hostage and just like that, in a matter of seconds, the matter is decided in our favor.

                  Rainbow Six Siege is a different kind of game.</p>
                  <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
                  <img src="images/rainbowSix/RainbowSix610c.jpg" alt="RainbowSix610 image"><p></p>
                  <img src="images/rainbowSix/Rappel610c.jpg" alt="RainbowSix610rappel image">
                  <p><a class="btn" href="#">View details &raquo;</a></p>
              </div><!--/span-->
              <div class="span4">
                  <!-- <h2>Heading</h2> -->
                  <p>by TheReaping1234, Wednesday, December, 16, 2015 at 06:03
                      I am really hoping this game wins shooter of the year from GI. It deserves it. One of the best shooters I have played in a very long time.</p>
                 <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
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
          </div><!--/row--> <!-- end of fourth row -->
          
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
          <div class="container"> 
              
              <p>Connect with The4threich_p in any of the following ways</p>
               <ul class="social">
                  <li><a class="icon-facebook-sign" href="http://faceylink.html"></a></li>
                  <li><a class="icon-twitter-sign" href="http://twitterlink.html"></a></li>
                  <li><a class="icon-envelope" href="mailto:something@yourmail.com"></a></li>
              </ul>
              <div class="toplink">
                  <a href="#">Top</a>
              </div>
          </div>
          
          
        <p>&copy; The4threich 2015 All Rights Reserved</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascripts/jquery-1.11.3.js"></script>
    <script src="javascripts/bootstrap.js"></script>
    <script src="javascripts/bootstrap/transition.js"></script>
    <script src="javascripts/bootstrap/alert.js"></script>
    <script src="javascripts/bootstrap/modal.js"></script>
    <script src="javascripts/bootstrap/dropdown.js"></script>
    <script src="javascripts/bootstrap/scrollspy.js"></script>
    <script src="javascripts/bootstrap/tab.js"></script>
    <script src="javascripts/bootstrap/tooltip.js"></script>
    <script src="javascripts/bootstrap/popover.js"></script>
    <script src="javascripts/bootstrap/button.js"></script>
    <script src="javascripts/bootstrap/collapse.js"></script>
    <script src="javascripts/bootstrap/carousel.js"></script>
    <script src="javascripts/bootstrap/typeahead.js"></script>

  </body>
</html>
