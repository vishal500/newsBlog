<?php get_header(); ?>

 <?php //get_search_form(); ?> 
      <div class="section-block pb-0">
         <div class="container">
            <form class="contact-form" method="GET" action="<?php echo home_url('/') ?>">
               <div class="row">
                  <div class="col-md-10"> 
                     <input type="text"  placeholder="Enter keywords...." name="s" required="required" value="<?php  _e(get_query_var('s'));?>"> 
                  </div>
                  <div class="col-md-2 mb-30">
                     <div class="center-holder"> <button type="submit" class="mt-2 btn">Search</button> </div>
                  </div>
               </div>
            </form>
            <div class="section-heading center-holder ">
               <h2 style="
                  text-align: left;
                  "> <?php  _e("Search Results for: ".get_query_var('s'));?></h2>
            </div>
         </div>
      </div>



 <div class="section-block pt-0">
         <div class="container">
            <div class="row ">
<?php

$s=get_search_query();
$args = ['s' =>$s];
$the_query = new WP_Query( $args );
 $counter = 0;

 if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1; ?>

               <div class="col-md-12 col-sm-12 col-12">
                  <div class="testmonial-box">
                     <div class="row">
                        <div class="col-12">
                           <h5><a href="<?php the_permalink(); ?>" style="color:#4078bd;"><?php echo $counter; ?>). <?php the_title(); ?> </a> </h5>
                        </div>

                     </div>
                  </div>
               </div>

    <?php endwhile; else: ?> 
    <div class="col-md-12 col-sm-12 col-12">
                  <div class="testmonial-box">
                     <div class="row">
                        <div class="col-1 pr-0"> 1.</div>
                        <div class="col-10">
                           <h5><a href="#">Sorry, there are no match to display.</a></h5>
                        </div>
                     </div>
                  </div>
               </div>

<?php endif; ?>



    <?php wp_reset_query(); ?> 


            
            </div>
         </div>
      </div>
<?php get_footer();
