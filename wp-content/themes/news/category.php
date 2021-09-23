<?php get_header();  ?>






<style type="text/css">
	.text_align1{
		text-align: center !important;
    width: 100%;
    padding: 50px;
    font-size: 26px;
    color: black;
	}
</style>
    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                    	 <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0"><?php echo  single_cat_title(); ?></h3>
                            </div>
                        </div>


          <?php 
    $cur_cat = get_cat_ID( single_cat_title("",false) );

   $args = array( 
     // 'post_type' => 'projects',
   'order' => 'desc',  'posts_per_page'=>-1, 'cat' => $cur_cat

   );

   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">
                                <img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                 <a class="h6 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>

                                    <div class="mb-1" style="font-size: 13px;">
                                        <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

         <?php endwhile; else: ?> 

         <h5 class="text_align1">Sorry, there are no post to display.</h5> <?php endif; ?>

        <?php //wp_reset_query(); ?> 


                      
                      
                    </div>

      
                </div>

               
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
<?php get_footer();
