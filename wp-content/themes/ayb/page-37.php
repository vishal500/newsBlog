<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
   	$url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>

<?php /* <div class="page-title-section" style="background-image: url('<?php echo $url; ?>');">
            <div class="container">
                <h1><?php the_title( ); ?></h1>
                <ul>
                    <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a></li>
                </ul>
            </div>
        </div> */ ?>


<div class="section-block-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading"><h4> <?php echo  get_field('profile_title'); ?></h4></div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <?php echo  get_field('profile_description'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12"><img src="<?php echo  get_field('profile_image'); ?>" class="rounded-border shadow-primary" alt=" <?php echo  get_field('profile_title'); ?>" /></div>
        </div>
    </div>
</div>

<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12"><img src="<?php echo  get_field('history_image'); ?>" class="rounded-border shadow-primary" alt="<?php echo  get_field('history_title'); ?>" /></div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading"><h4><?php echo  get_field('history_title'); ?></h4></div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <?php echo  get_field('history_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-block-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading"><h4> <?php echo  get_field('mission_title'); ?></h4></div>
                    <div class="section-heading-line-left"></div>
                    <div class="text-content-big mt-20">
                        <?php echo  get_field('mission_description'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12"><img src="<?php echo  get_field('mission_image'); ?>" class="rounded-border shadow-primary" alt=" <?php echo  get_field('mission_title'); ?>" /></div>
        </div>
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="section-heading center-holder">
            <h3><?php echo  get_field('key_personnel_title'); ?></h3>
            <div class="section-heading-line"></div>
            <p>
                <?php echo  get_field('key_personnel_description'); ?>
            </p>
        </div>
        <div class="row mt-50">

            <?php 

   $args = array( 
     'post_type' => 'team',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
 ?>
            <div class="col-md-3 col-sm-4 col-12">
                <div class="team-member">
                    <div class="team-member-img"><img src="<?php echo  get_field('profile')['guid']; ?>" alt="<?php the_title(  ) ?>" /></div>
                    <div class="team-member-text">
                        <h4><a ><?php the_title(  ) ?></a></h4>
                        <span><?php echo  get_field('designation'); ?></span><br>
                        <a href="<?php echo  get_field('cv')['guid']; ?>" class="dark-pulse-button add-to-cart-button teamAnker" download> View CV</a>
                    </div>
                </div>
            </div>
   <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no team to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
        </div>
       
    </div>
</div>


<?php get_footer();
