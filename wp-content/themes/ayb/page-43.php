<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
   	$url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>

<div class="page-title-section" style="background-image: url('<?php echo $url; ?>');">
    <div class="container">
        <h1><?php the_title( ); ?></h1>
        <ul>
            <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
            <li>
                <a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a>
            </li>
        </ul>
    </div>
</div>
<div class="section-block">
   <div class="container">
      <div class="row mt-50">

        <?php 

   $args = array( 
     'post_type' => 'clients',
   'order' => 'ASC',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );  ?>
        <div class="col-md-3 col-sm-6 col-12">
                        <div class="service-simple" style="box-shadow: 0px 10px 30px 0px rgb(50 50 50 / 6%);">
                            <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" style="width: 100%; height: 150px; object-fit: cover;">
                            <div class="service-simple-inner">
                                <h4 class="text-center"><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </div>
             <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no clients to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
      </div>
      
   </div>
</div>

<?php get_footer();
