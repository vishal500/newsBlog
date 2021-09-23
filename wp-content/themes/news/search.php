<?php get_header(); ?>



    <div class="container">
        <div class="row mb-3">
               <form method="GET" action="<?php echo home_url('/') ?>" class="d-flex w-100">   
                  <div class="col-md-10"> 
                     <input type="text" class="search-btn" placeholder="Enter keywords...." name="s" required="required" value="<?php  _e(get_query_var('s'));?>"> 
                  </div>
                  <div class="col-md-2">
                      <input type="submit" value="Search" class="btn btn-primary font-weight-semi-bold py-2 px-3" style="margin-top: 12px;">
                  </div>
              </form>
               </div>
    </div>


      <div class="container">
         <div class="row">
              <div class="col-md-12 py-3">
               <h2>Search Results for : <?php  _e("Search Results for: ".get_query_var('s'));?></h2>
            </div>
         </div>
         <div class="row mb-4">

            <?php

$s=get_search_query();
$args = ['s' =>$s,'post_status' => 'publish'];
$the_query = new WP_Query( $args );
 $counter = 0;

 if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1; ?>
            <div class="col-md-6">
               <div class="card">
                  <div class="card-body"> <a href="<?php the_permalink(); ?>"> <?php echo $counter; ?>). <?php the_title(); ?> </a></div>
               </div>
            </div>

    <?php endwhile; else: ?> 
<?php endif; ?>


         </div>
      </div>


<?php get_footer();
