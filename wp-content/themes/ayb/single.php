<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
   	$url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>

<!--   <div class="page-title-section overly" style="background-image: url('<?php echo $url; ?>');">
            <div class="container">
                <h1><?php the_title( ); ?></h1>
                <ul>
                    <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a></li>
                </ul>
            </div>
        </div> -->

    

   
   
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                 <div class="section-heading">
                        <div class="text-content-big section-heading "> <h3 class="text-center"><?php the_title( ); ?></h3></div>
                        <div class="section-heading-line mb-4"></div>
                    </div>
                    <div class="text-content-big mt-20">
                      <img src="<?php echo $url; ?>" alt="<?php the_title( ); ?>" class="img-fluid" style="width: 100%;">
                    </div>

                    <div class="text-content-big mt-20">
                       <?php the_content() ?>
                    </div>
                   
                    
            </div>
        </div>
      
    </div>
</div>

<?php get_footer();
