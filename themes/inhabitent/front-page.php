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
                    <div class="box-content">
                    <a href="#" class="entry-titlefront">Getting Back to Nature in a Canoe</a>
                    <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
             </div>
  
             <div class="right">
     
                <div class="topright">
                    <div class="box2">
                        <div class="box-content">
                        <a href="#" class="entry-titlefront">A Night with Friends at the Beach</a>
                        <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
     
             <div class="box34">
                <div class="box3">
                    <div class="box-content">
                    <a href="#" class="entry-titlefront">Taking in the View at Big Mountain</a>
                    <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="box4">
                    <div class="box-content">
                    <a href="#" class="entry-titlefront">Star-Gazing at the Night Sky</a>
                    <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            <div>
                
           </div>
  
         </div>

         </section>

	</div><!-- #primary -->


<?php get_footer(); ?>
