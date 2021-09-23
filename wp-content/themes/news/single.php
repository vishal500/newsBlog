<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
    $url = get_template_directory_uri()."/website/img/Untitled-17.jpg";
   } 
?>

    <!-- News With Sidebar Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="row">
            
                    <div class="col-lg-8">
                        <!-- News Detail Start -->
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="<?php echo $url; ?>" alt="<?php the_title( ); ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-3">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                </div>
                                <div>
                                    <h3 class="mb-3"><?php the_title( ); ?></h3>
                                    <div class="col-md-12">
                                        <div class="row"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- News Detail End -->

                     

                    </div>


                       <div class="col-lg-4 pt-3 pt-lg-0">
                        <!-- Popular News Start -->
                        <div class="pb-3">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest News</h3>
                            </div>
         <?php 
    $cur_cat = get_cat_ID( single_cat_title("",false) );
   $args = array( 
   'order' => 'desc',  'posts_per_page'=>5, 'cat' => 16, 'post_status' => 'publish',

   );
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                            <div class="d-flex mb-3">
                                <img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                                </div>
                            </div>

           <?php endwhile; else: ?> <?php endif; ?>

                        
                        </div>
                        <!-- Popular News End -->

                       
                    </div>

                 
                </div>
            </div>
        </div>
        </div>
        <!-- News With Sidebar End -->



   
<?php get_footer();
