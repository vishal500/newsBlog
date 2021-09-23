<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
    $url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>

<div class="page-title-section" style="background-image: url('<?php echo $url; ?>');">
    <div class="container">
        <h1><?php echo get_the_title( $_GET['rsp']); ?></h1>
        <ul>
            <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
            <li>
                <a href="<?php echo get_permalink(41 ); ?>"><?php echo get_the_title(41); ?></a>
            </li>

             <li>
                <a href="#"><?php echo get_the_title( $_GET['rsp']); ?></a>
            </li>
        </ul>
    </div>
</div>

      <div class="section-block">
         <div class="container">
        <!--     <div class="section-heading"> 
                <h4> <?php echo get_the_title( $_GET['rsp']); ?></h4> <div class="section-heading-line-left"></div>
            </div> -->
               <div class="gallery-container d-block d-lg-flex" id="gallery-container">
               <!-- <div class="" id="gallery-container"> -->
                <?php
 $getId = $_GET['rsp'];


     $args = array(
        'post_type' => 'sub_projects',
         'posts_per_page'=>-1,
         'meta_query' => [
            'relation' =>'AND',
                [
                    'key' => 'select_project',
                    'value' => $getId,
                ]
        ],
    );

   $the_query = new WP_Query( $args );
   // echo "<pre>";
   // print_r($the_query);

 $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
      ?>

                    <a  class="gallery-item col-md-4" data-src="<?php echo  get_field('project_image')['guid']; ?>" >
                            <div class="service-simple" >
                                 <img src="<?php echo  get_field('project_image')['guid']; ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            <div class="service-simple-inner">
                                <h4 class="text-center"><?php the_title(); ?></h4>
                            </div>
                        </div>
                     </a>


 <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no match to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
                  
               </div>
             
         </div>
      </div>

     

<?php get_footer();
