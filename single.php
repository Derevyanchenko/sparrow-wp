<?php get_header(); ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Blog<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

           <?php  
            if(have_posts() ) : while(have_posts() ) : the_post(); 
           ?>

             <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title(); ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time("F jS, Y") ?></time>
                     /
                     <span class="categories">
                        <?php the_tags("", " / "); ?>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail("post_thumb"); ?>
               </div>

               <div class="post-content">
                  <?php the_content(); ?>
               </div>
            </article> <!-- post end -->

        <?php endwhile; ?>
        <?php endif; ?>

         </div>

         <div id="secondary" class="four columns end">

           <?php get_sidebar(); ?>

         </div> <!-- Comments End -->

      </div>

   </div> <!-- Content End-->

   <!-- Tweets Section
   ================================================== -->
  

  <?php get_footer(); ?>