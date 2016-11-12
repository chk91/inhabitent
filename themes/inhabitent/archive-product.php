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
				?>

				 <p><?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?></p>

<section class="shop-stuffarch container">
		<ul class="do-stuffarch container">
            <?php

            $terms = get_terms('product_type');
            foreach ($terms as $term):
            ?>

            <li>
            <?php $url = get_term_link ($term->slug , 'product_type'); ?>
            
            <a class = "shopstuff-buttonarch" href="<?php echo $url?> "> <?php echo $term->name ; ?> </a>
            </li>

            <?php endforeach; ?>
			</ul>
</section>
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

         