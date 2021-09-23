<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/icomoon.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/swiper.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/slider.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/website/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/switcher.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/website/css/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/styles.css" id="colors" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/website/css/other.css" />
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <?php 
            if ( get_the_ID() == 171) { ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-share.css">
           <?php  }
         ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="preloader">
            <div class="row loader">
                <div class="loader-icon"></div>
            </div>
        </div>
        <div id="top-bar" class="hidden-sm-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="top-bar-info">
                            <ul>
                                <li><i class="fa fa-phone"></i> <?php  echo doCustomSetting('contact_no');  ?></li>
                                <li></li>
                                <li><i class="fa fa-envelope"></i>
                                    <?php  echo doCustomSetting('email');  ?></li>
                                <li><div id="google_translate_element"></div></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <ul class="social-icons hidden-md-down">
                            <li>
                                <a href="<?php  echo doCustomSetting('facebook');  ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?php  echo doCustomSetting('linked_in');  ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="<?php  echo doCustomSetting('youtube');  ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?php  echo doCustomSetting('instagram');  ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                              
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <header>
            <nav id="navigation4" class="container navigation">
                <div class="nav-header">
                    <a class="nav-brand" href="<?php echo home_url('/'); ?>"> <img src="<?php echo siteLogo()[0] ?>" class="main-logo" alt="<?php echo siteLogo()[1] ?>" id="main_logo" /> </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu align-to-right">

<?php
 $menu = wp_get_menu_array('Header Menu');                         
 if (count($menu) > 0) {
   foreach($menu as $value){ 
            if (count($value['children']) == 0) { ?>
                     <li>
                            <a href="<?php echo $value['url'];  ?>" class="<?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $value['title'];  ?></a>
                        </li>
       <?php     }else{  ?>
                <li>
                    <a href="<?php echo $value['url'];  ?>" class="<?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $value['title'];  ?></a>
                     <ul class="nav-dropdown">
                        <?php foreach($value['children'] as $chile) { ?>
                             <li> <a href="<?php echo $chile['url'];  ?>" class="<?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $chile['title'];  ?></a></li>
                      <?php  } ?>
                     </ul>
                  </li>


        <?php } } } ?>

                    </ul>
                </div>
            </nav>
        </header>






       