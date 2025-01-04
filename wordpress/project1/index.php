<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package project
 */

get_header();
?>


    <main>
      <img class="center-photo" src="<?php echo get_template_directory_uri(); ?>/images/one.png" alt="">
      <a href="https://wa.me/12345
      ">
      <img class="facebook" src="<?php echo get_template_directory_uri(); ?>/icons/whatsapp.png" alt="">
    </a>
      <div class="text">
        <p>Tucked away in the corner of Wellington, Latte Cafe is a <br>
             local neighbourhood cafe and bar. Latte is all about doing <br>
              what we love, in a city that we love. We keep stocked <br>
               with local produce and pastries.  Bring your family for a <br>
               bite, or meet your friends for a coffee or warm drink.</p>
      </div>


      <div id="modal" class="modal">
        <div class="modal-content">
         <button id="X" class="X">X</button>
         <h1>This is Modal</h1>
         <h3>I created modal with jQuery</h3>
         <button class="btk">Takeaway</button>
        </div>
      </div>


      <div class="main-center">
        <div>
            <p>Menu</p>
            <p>We change our menu every season. <br>
                 Here is what we are currently <br>
                  dishing up.</p>
                  
                  <button id="modal-food">Food Menu</button>
                  <button>Drinks Menu</button>
                  <button>Takeaway Menu</button>
                </div>
                <div>
                    <img class="img-mc" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" width="664px" height="1037px" alt=""></div>
              </div>
        </div>
	    </main>

<?php
get_sidebar();
get_footer();
