<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  // if ($url == '') {
  //   $url = get_template_directory_uri()."/website/img/Untitled-17.jpg";
  //  } 
?>

    <!-- News With Sidebar Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="row">
            
                    <div class="col-lg-12">
                        <!-- News Detail Start -->
                        <div class="position-relative mb-3">
                            <?php if ($url <> '') { ?>
                               
                         
                            <!-- <img class="img-fluid w-100" src="<?php echo $url; ?>" alt="<?php the_title( ); ?>" style="object-fit: cover;"> -->
                               <?php } ?>
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


                       
                       

                 
                </div>
            </div>
        </div>
        </div>
        <!-- News With Sidebar End -->



   
<?php get_footer();
