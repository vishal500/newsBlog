<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
   	$url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>
<?php /*
  <div class="page-title-section" style="background-image: url('<?php echo $url; ?>');">
            <div class="container">
                <h1><?php the_title( ); ?></h1>
                <ul>
                    <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a></li>
                </ul>
            </div>
        </div>
*/ ?>
    

        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h3>Services We Provide</h3>
                    <div class="section-heading-line"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br />
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="row mt-50">
<?php 

   $args = array( 
     'post_type' => 'service_list',
   'order' => 'ASC',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );  ?>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="service-box">
                           <a href="<?php echo get_permalink(); ?>"> <img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" /></a>
                            <div class="service-inner-box clearfix">
                                <div class="">
                                    <h3 class="text-center"><a href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a></h3>
                                    <p><?php echo  get_field('sort_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

    <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no service to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
                </div>
            </div>
        </div>
        
           
   
   
<div class="section-block-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="pl-30-md">
                    <div class="text-content-big mt-20">
                       <?php the_content() ?>
                    </div>
                   
                    
                </div>
            </div>
        </div>
      
    </div>
</div>

<?php get_footer();
