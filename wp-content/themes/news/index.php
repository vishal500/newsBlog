<?php get_header();  ?>

<style type="text/css">
  .firstx  .owl-stage .owl-item{
        background: #fff;
    }
</style>

    <!-- Top News Slider Start -->
    <div class="container-fluid py-3 firstx">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">

          <?php 
    $cur_cat = get_cat_ID( single_cat_title("",false) );
   $args = array( 
   'order' => 'desc',  'posts_per_page'=>4, 'cat' => 16, 'post_status' => 'publish',

   );
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>


                <div class="d-flex col-md-4 pl-0">
                    <img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                    </div>
                </div>
           <?php endwhile; else: ?> <?php endif; ?>

        <?php //wp_reset_query(); ?>      
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
           <?php 

   $args = array( 
     'post_type' => 'home_page_news',  'posts_per_page'=>7, 'post_status' => 'publish',

   );

   $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
 ?>


                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="<?php echo get_permalink(); ?>"><?php echo get_the_date( get_option('date_format') ); ?></a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                            </div>
                        </div>
                       <?php endwhile; else: ?> <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="<?php echo get_permalink(304); ?>">View All</a>
                    </div>

           <?php
  $menu =  wp_get_nav_menu_items(18) ; 
 if (count($menu) > 0) {
   foreach($menu as $value){ 
      $term1 = get_category($value->{'object_id'});
    ?>

                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="<?php echo z_taxonomy_image_url($term1->{'term_id'}); ?>" style="object-fit: cover;">
                        <a href="<?php echo $value->{'url'};  ?>" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                          <?php echo $value->{'title'};  ?>
                        </a>
                   </div>

   <?php } }  

   ?>          
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Featured</h3>
                <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> -->
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
      <?php 
   $args = array( 
   'post_type' => 'featured_news', 'order' => 'desc',  'post_status' => 'publish',

   );
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="<?php echo get_permalink(); ?>"><?php echo get_the_date( get_option('date_format') ); ?></a>
                        </div>
                        <a class="h4 m-0 text-white" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                    </div>
                </div>


    <?php endwhile; else: ?> <?php endif; ?>
    
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Business</h3>
                    <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="<?php echo get_permalink(304); ?>">View All</a> -->

                    </div>
                    <div class="row  position-relative">
   <?php 
   $args = ['order' => 'desc',  'post_status' => 'publish','cat' => 10, 'posts_per_page'=>2];
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                        <div class="position-relative col-md-6">
                            <img class="img-fluid w-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                            <div class=" overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                            </div>
                        </div>
                <?php endwhile; else: ?> <?php endif; ?>
         
                    
                    </div>
                </div>


                         <div class="col-lg-6 py-3">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Technology</h3>
                    <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="<?php echo get_permalink(304); ?>">View All</a> -->

                    </div>
                    <div class="row  position-relative">
   <?php 
   $args = ['order' => 'desc',  'post_status' => 'publish','cat' => 13, 'posts_per_page'=>2];
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                        <div class="position-relative col-md-6">
                            <img class="img-fluid w-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                            <div class=" overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                            </div>
                        </div>
                <?php endwhile; else: ?> <?php endif; ?>
         
                    
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->

    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Sports</h3>
                    <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="<?php echo get_permalink(304); ?>">View All</a> -->

                    </div>
                    <div class="row  position-relative">
   <?php 
   $args = ['order' => 'desc',  'post_status' => 'publish','cat' => 12, 'posts_per_page'=>2];
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                        <div class="position-relative col-md-6">
                            <img class="img-fluid w-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                            <div class=" overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                            </div>
                        </div>
                <?php endwhile; else: ?> <?php endif; ?>
         
                    
                    </div>
                </div>


                         <div class="col-lg-6 py-3">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">World News</h3>
                    <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="<?php echo get_permalink(304); ?>">View All</a> -->

                    </div>
                    <div class="row  position-relative">
   <?php 
   $args = ['order' => 'desc',  'post_status' => 'publish','cat' => 9, 'posts_per_page'=>2];
   $the_query = new WP_Query( $args );
   $counter = 0;
 
  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>

                        <div class="position-relative col-md-6">
                            <img class="img-fluid w-100" src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" style="object-fit: cover;">
                            <div class=" overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <span><?php echo get_the_date( get_option('date_format') ); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a>
                            </div>
                        </div>
                <?php endwhile; else: ?> <?php endif; ?>
         
                    
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->



 
<?php get_footer();
