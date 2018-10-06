<?php  

/*
Template Name: Страница с работой портфолио
Template Post Type: Portfolio
*/
?>

<?php get_header(); ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <section class="entry cf">

               <div id="secondary"  class="four columns entry-details">

                     <h1><?php the_title(); ?></h1>

                     <?php the_post_thumbnail(); ?>

                     <div class="entry-description">

                        <p><?php the_content(); ?></p>

                     </div>
               </div> 
            </section> 

         <?php endwhile; ?>
         <?php endif; ?>

      </div>

   </div> 

  <?php get_footer(); ?>