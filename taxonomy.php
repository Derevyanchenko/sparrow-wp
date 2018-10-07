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

            <!--  portfolio item -->
                <div class="columns portfolio-item">
                  <div class="item-wrap">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                      <div class="overlay"></div>
                      <div class="link-icon"><i class="fa fa-link"></i></div>
                    </a>
                    <div class="portfolio-item-meta">
                      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                </div> 
                <!--  portfolio item end -->

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