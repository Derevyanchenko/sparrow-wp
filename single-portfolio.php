

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

                  <div class="entry-description">

                     <p><?php the_content(); ?></p>

                  </div>

                  <ul class="portfolio-meta-list">
                     <li><span>Date: </span><?php the_field("portfolio_date") ?></li>
                     <li><span>Client </span><?php the_field("client") ?></li>
                     <li><span>Skills: </span><?php the_terms(get_the_ID(), "skills", "", " / ", "") ?></li>
                  </ul>

            </div> <!-- secondary End-->

            <div id="primary" class="eight columns">

               <div class="entry-media">

                  <img src="<?php the_field("portfolio_img_1") ?>" alt="" />

                  <img src="<?php the_field("portfolio_img_2") ?>" alt="" />

               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

         <?php endwhile; ?>
         <?php endif; ?>

      </div>

   </div> 




  <?php get_footer(); ?>