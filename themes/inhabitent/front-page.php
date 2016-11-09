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

        <section class="latestSection">
<ul>
            <?php 
            $args = array(   'post_type' => 'post',
                    'order' => 'DESC',
                    'posts_per_page' => 3);
            $posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
            <?php the_post_thumbnail( 'category-thumb' ); ?>
            <div>
           <?php echo get_the_date(); ?>
           <?php comments_number(); ?>
           <a class ="read-more2" href = "<?php the_permalink();?>"> Read More</a>
            <a href = "<?php the_permalink();?> "> <h2><?php the_title();?></h2> </a></li>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
</ul>

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
  
         </div>

         </section>

	</div><!-- #primary -->


<?php get_footer(); ?>
