<?php get_header(); ?>



<div class="swiper-main-slider swiper-container">
    <div class="swiper-wrapper">
        <?php 
                   $args = array( 
                   'post_type' =>
        'home_slider', 'order' => 'ASC', 'posts_per_page'=>-1 ); $the_query = new WP_Query( $args ); ?>
        <?php
                     $counter = 0;
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $counter = $counter+1; $banner = get_post_meta( get_the_ID(), 'banner_image', true); ?>
        <div class="swiper-slide" style="background-image: url('<?php echo $banner['guid']; ?>');">
            <div class="medium-overlay"></div>
            <div class="container">
                <div class="slider-content left-holder">
                    <h2 class="animated fadeInDown">
                        <?php the_title(); ?>
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <p class="animated fadeInDown">
                                <?php echo get_field('sort_description'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="animated fadeInUp mt-30">
                        <a href=" <?php echo get_field('button_link'); ?>" class="primary-button button-md"> <?php echo get_field('button_name'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>





        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h3> <?php echo get_field('about_title',49); ?></h3>
                    <div class="section-heading-line"></div>
                    <p>
                        <?php echo get_field('about_sort_description',49); ?>
                    </p>
                </div>
                <div class="row mt-50 about_custom">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="service-box">
                            <div class="service-inner-box clearfix">
                                <div class="service-icon-box">
                                    <img src="<?php echo get_field('about_box_1_image',49); ?>" alt="">
                                </div>
                                <div class="service-content-box">
                                    <h3><a><?php echo get_field('about_box_1_title',49); ?></a></h3>
                                    <p><?php echo get_field('about_box_1_sort_description',49); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="service-box">
                            <div class="service-inner-box clearfix">
                                <div class="service-icon-box"><img src="<?php echo get_field('about_box_2_image',49); ?>" alt=""></div>
                                <div class="service-content-box">
                                    <h3><a><?php echo get_field('about_box_2_title',49); ?></a></h3>
                                    <p><?php echo get_field('about_box_2_sort_description',49); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="service-box">
                            <div class="service-inner-box clearfix">
                                <div class="service-icon-box"><img src="<?php echo get_field('about_box_3_image',49); ?>" alt=""></div>
                                <div class="service-content-box">
                                    <h3><a><?php echo get_field('about_box_3_title',49); ?></a></h3>
                                    <p><?php echo get_field('about_box_3_sort_description',49); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="mt-25"><a href="<?php echo get_permalink(37); ?>" class="primary-button button-sm mb-15-xs">View All</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-block-grey pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-12">
                        <div class=""><img src="<?php echo get_field('interesting_facts_backgroud_image',49); ?>" alt="img" /></div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-12">
                        <div class="pl-30-md">
                            <div class="section-heading mt-60">
                                <h3><?php echo get_field('interesting_facts_title',49); ?></h3>
                            </div>
                            <div class="text-content-big mt-25">
                                <p>
                                   <?php echo get_field('interesting_facts_description',49); ?>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="counter-box left-holder">
                                        <h3 class="countup"> <?php echo get_field('interesting_facts_count_1_value',49); ?></h3>
                                        <p> <?php echo get_field('interesting_facts_count_1_name',49); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="counter-box left-holder">
                                        <h3 class="countup"> <?php echo get_field('interesting_facts_count_2_value',49); ?> </h3>
                                        <p><?php echo get_field('interesting_facts_count_2_name',49); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
   'order' => 'Asc',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );  ?>

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="service-box">
                            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $url;  ?>" alt="<?php the_title(  ) ?>" /></a>
                            <div class="service-inner-box clearfix">
                                <div class="">
                                    <h3 class="text-center"><a href="<?php echo get_permalink(); ?>"><?php the_title(  ) ?></a></h3>
                                    <p><?php echo  get_field('sort_description'); ?></p>
                                    <!-- <a href="<?php echo get_permalink(); ?>" class="text-center button-tag primary-button">Read more.</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

    <?php endwhile; else: ?> <h5 class="text-center" style="width: 100%;">Sorry, there are no service to display.</h5> <?php endif; ?>

    <?php wp_reset_query(); ?> 
                </div>
            </div>
        </div>
        <div class="section-block-bg" style="background-image: url('<?php echo get_template_directory_uri();  ?>/website/img/bg/bg1.jpg');">
            <div class="container">
                <div class="section-heading center-holder white-color">
                    <h2><strong>Lets Make Your Dream Project With Our Professionals</strong></h2>
                    <a href="<?php echo get_permalink(41); ?>" class="primary-button button-md mt-10">Start Projects</a>
                </div>
            </div>
        </div>
        <div class="section-block">
            <div class="container">
                <div class="section-heading text-center">
                    <h4>Our Projects</h4>
                    <div class="section-heading-line-left m-auto"></div>
                </div>
                <div class="row mt-30">
                    <div class="masonry">

                  <?php 

   $args = array( 
     'post_type' => 'projects',
   'order' => 'Asc',  'posts_per_page'=>-1

   );

   $the_query = new WP_Query( $args );
   $counter = 0;

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
     $counter = $counter+1;
     $url = wp_get_attachment_url( get_post_thumbnail_id($the_query->ID), 'thumbnail' );  ?>
      
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
        <div id="map" class="mt-10" >
            <?php  echo doCustomSetting('google_map');  ?>
        </div>

<?php get_footer();
