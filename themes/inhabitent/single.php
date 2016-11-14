<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-areahome">
		<main id="main" class="site-mainhome" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-titlehome screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<div class = "social-wrapper">

					<a class ="social-button" href ="">
						<i class="fa fa-facebook-square" aria-hidden="true"> </i> Like
					</a>

					<a class ="social-button" href ="">
						<i class="fa fa-twitter" aria-hidden="true"></i> Tweet
					</a>

					<a class ="social-button" href ="">
						<i class="fa fa-pinterest" aria-hidden="true"> </i> Pin
					</a>

				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		

		

		</main><!-- #main -->
<?php get_sidebar(); ?>
	</div><!-- #primary -->

		


<?php get_footer(); ?>
