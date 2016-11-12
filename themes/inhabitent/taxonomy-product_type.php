<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-areaproduct container">
		<main id="main" class="site-mainproduct" role="main">
		<header class="archive-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->


		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<div class = "fap-master">
			<?php while ( have_posts() ) : the_post(); ?>

				  <div class = "one-product">
                   <?php if ( has_post_thumbnail() ) : ?>
				   <div class="thumbnail-wrapper">
			<a href="<?php the_permalink()?> "><?php the_post_thumbnail( 'large' ); ?></a>
			</div>
		<?php endif; ?>

<div class="product-info">
		<?php the_title( sprintf( '<p>', esc_url( get_permalink() ) ), '</p>' ); ?>

               <p><?php echo CFS()->get( 'product_price' ); ?> </p>
               </div>
</div>
			<?php endwhile; ?>
		</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

         