<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_template_directory_uri();  ?>/website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_template_directory_uri();  ?>/website/css/style.css" rel="stylesheet">
     <?php wp_head(); ?>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex ">
                          <?php
  $menu =  wp_get_nav_menu_items('Quick Menu 2') ; 
 if (count($menu) > 0) {
   foreach($menu as $value){
    ?>
             <a href="<?php echo $value->{'url'};  ?>" class="text-secondary mb-2">
               <?php echo $value->{'title'};  ?> | &nbsp;
            </a>


   <?php } }  

   ?>  
   &nbsp; <div id="google_translate_element"></div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block" id="clock">
                 <!-- Monday, January 01, 2045 -->
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="<?php echo home_url('/'); ?>" class="navbar-brand d-none d-lg-block">
                   <img src="<?php echo siteLogo()[0] ?>" class="img-fluid" alt="<?php echo siteLogo()[1] ?>">
                </a>
            </div>
           <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
            <form method="GET" action="<?php echo home_url('/') ?>" class="d-flex">                    
                <input type="text" name="s" class="form-control" placeholder="Keyword...">
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </form>

                </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="<?php echo home_url('/'); ?>" class="navbar-brand d-block d-lg-none">
               <!--  <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1> -->
               <img src="<?php echo siteLogo()[0] ?>" class="img-fluid" alt="<?php echo siteLogo()[1] ?>"> 
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?php echo home_url('/'); ?>" class="nav-item nav-link <?php if(currentUrl() ==   home_url('/')) { echo 'active'; } ?>">Home</a>


<?php
 $menu = wp_get_menu_array('Header Menu');                         
 if (count($menu) > 0) {
   foreach($menu as $value){ 
            if (count($value['children']) == 0) { ?>
                            <a href="<?php echo $value['url'];  ?>" class="nav-item nav-link <?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $value['title'];  ?></a>
       <?php     }else{  ?>
                    <a href="<?php echo $value['url'];  ?>" class="nav-item nav-link  <?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $value['title'];  ?></a>
                     <ul class="nav-dropdown">
                        <?php foreach($value['children'] as $chile) { ?>
                             <li> <a href="<?php echo $chile['url'];  ?>" class=" <?php if(currentUrl() ==  $value['url']) { echo 'active'; } ?>"><?php echo $chile['title'];  ?></a></li>
                      <?php  } ?>
                     </ul>


        <?php } } } ?>
           
                </div>
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->






