
<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<div id="primary-about" class="content-area-about">
 <main id="main" class="site-main" role="main">
  
     
  
   <section class="about-hero">
       <div>
       <h1>About</h1>
       </div>
   </section>

   <div class="my-story container">
        <div class="my-story-wrapper">
            <?php echo CFS()->get('our_story');?>
        </div>
    </div>

 </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>