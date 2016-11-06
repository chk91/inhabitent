<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div class="banner-hero">
    </div>

   

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

             

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

        <section class="adventureSection">
            <h2>Latest Adventures</h2>

          <div class="adventures">
  
             <div class="left">
                <div class="box1">
                    <a href="#">Getting Back to Nature in a Canoe</a>
                </div>
             </div>
  
             <div class="right">
     
                <div class="topright">
                    <div class="box2">
                        <a href="#">A Night with Friends at the Beach</a>
                    </div>
                </div>
     
             <div class="box34">
                <div class="box3">
                    <a href="#">Taking in the View at Big Mountain</a>
                </div>
                <div class="box4">
                    <a href="#">Star-Gazing at the Night Sky</a>
                </div>
            <div>
                
           </div>
  
         </div>

         </section>

	</div><!-- #primary -->


<?php get_footer(); ?>
