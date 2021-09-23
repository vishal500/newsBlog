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
<div class="section-block-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading">
                        <h4><?php echo  get_field('career_title'); ?></h4>
                    </div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                       <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 mt-60">
                <div class="section-heading">
                    <h5>Latest Openings</h5>
                    <div class="section-heading-line-left"></div>
                </div>
                <div class="panel-group mt-40" id="accordion2" role="tablist" aria-multiselectable="true">
<?php 

   $args = array( 
     'post_type' => 'vacancies',
   'order' => 'DESC',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1; ?>


                    <div class="panel panel-grey accordion">
                        <div class="panel-heading accordion-heading" role="tab" id="acc<?php echo  $counter ?>">
                            <h4 class="panel-title accordion-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#ac_col<?php echo  $counter ?>" aria-expanded="true" aria-controls="ac_col<?php echo  $counter ?>"> <?php the_title(); ?> <br> Last Date :  <?php echo  get_field('last_date'); ?></a>
                            </h4>
                        </div>
                        <div id="ac_col<?php echo  $counter ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="acc<?php echo  $counter ?>">
                            <div class="panel-body accordion-body">
                               <?php the_content(); ?> 
                            </div>
                        </div>
                    </div>
                   
    <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no vacancies to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 

                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
