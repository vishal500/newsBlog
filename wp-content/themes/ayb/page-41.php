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
            <li>
                <a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a>
            </li>
        </ul>
    </div>
</div>
 */ ?>

  <div class="section-block">
            <div class="container">
                  <div class="section-heading center-holder">
                    <h3><?php the_title( ); ?></h3>
                    <div class="section-heading-line"></div>
                   
                </div>
                <div class="row mt-30">
                    <div class="masonry">

                  <?php 

   $args = array( 
     'post_type' => 'projects',
   'order' => 'ASC',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' ); 
      ?>
     
                        <a href="<?php echo get_permalink(171).'?rsp='. get_the_ID(); ?>">
                            <div class="masonry-item">
                                <img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>"  />
                                <div class="masonry-item-overlay">
                                    <h4><?php the_title(  ) ?></h4>
                                </div>
                            </div>
                        </a>
                 <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no service to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
                    </div>
                </div>
            </div>
        </div>

<?php get_footer();
