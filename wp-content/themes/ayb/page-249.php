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
                    <li><a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a></li>
                </ul>
            </div>
        </div>
<style type="text/css">

.technical-support{
    background:url(images/technical-support1.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.site{
    background:url(images/site.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.corporate-social-responsibility{
    background:url(images/corporate-social-responsibility.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.readymade{
    background:url(images/ready-made-software.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.blog-post{
    box-shadow: 0px 0px 4px;
    padding: 10px;
    border-radius: 10px;
}
.refund-policy{
    background:url(images/refund-policy.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.hosting{
    background:url(images/hosting.jpg);
    background-size: cover;
    background-position: center;
    width: 100%;
    padding: 100px 0px !important;
}
.circle{
    background: #000;
    border-radius: 50%;
    height: 85px;
    width: 85px;
    border: 4px solid red;
    line-height: 80px;
    font-size: 20px;
}
.extra-border{
    border-top-color: red !important;
    border-bottom-color: red !important;
    border-top-width: 2px !important;
    border-bottom-width: 2px !important;
}
.tree-structure{
    list-style: none;
    clear: both;
    padding-left: 15px;
}
.tree-structure li {
    position: relative;
}
.tree-structure li a{
    font-weight: normal;
    color: #4078bd;
    text-decoration: none;
    font-weight: 700;
    vertical-align: middle;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.2s ease-in-out;
    display: inline-block;
    max-width: calc(100% - 50px);
    vertical-align: top;
}
.tree-structure li a:hover{
    padding-left: 5px;
}
.tree-structure > li > .num{
    display: inline-block;
    background: #4078bd;
    min-width: 24px;
    padding-left: 0px;
    padding-right: 0px;
    text-align: center;
    padding: 3px 9px;
    margin-right: 10px;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
}
.tree-structure > li > .num:after{
    position: absolute;
    content: "";
    width: 1px;
    height: 100%;
    background-color: #939393;
    top: 5px;
    left: 12px;
    z-index: -1;
}
.tree-structure > li:last-child > .num:after{   
    height: calc(100% - 44px);
}
.tree-structure ol{
    padding: 20px 0 20px 45px;
}
.tree-structure ol li{
    list-style-type: none;
    padding: 8px 0
}
.tree-structure ol li .num{
    position: relative;
}
.tree-structure ol li a{
    color: #000;
    font-weight: normal;
}
.tree-structure .num{
    background-color: #666;
    min-width: 24px;
    padding-left: 0px;
    padding-right: 0px;
    text-align: center;
    padding: 3px 9px;
    margin-right: 10px;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
    display: inline-block;
    vertical-align: middle;
}
.tree-structure  ol  li .num:before{
    position: absolute;
    content: "";
    top: 0;
    bottom: 0;
    right: 100%;
    margin: auto;
    width: 33px;
    height: 1px;
    background-color: #939393;
}
.tree-structure li {
    position: relative;
    margin-bottom: 3px;
}
</style>


      <section class="section-block1">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ol class="tree-structure">
                 
                     <?php
 $menu = wp_get_menu_array2('Site Map');  
 if (count($menu) > 0) {
    $count = 0;
   foreach($menu as $value){ 
     $count += 1;
            if (count($value['children']) == 0) { ?>
                     <li>
                         <span class="num"><?php echo $count ?></span>
                            <a href="<?php echo $value['url'];  ?>">
                                <?php echo $value['title'];  ?></a>
                        </li>
       <?php     }else{   $countChild = 0;  ?>
               
                        <li>
                            <span class="num"><?php echo $count ?></span>
                            <a href="<?php echo $value['url'];  ?>">
                                <?php echo $value['title'];  ?>
                                    
                                </a>
                     <ol>
                           
                        <?php foreach($value['children'] as $chile) {   $countChild += 1;?>
                             <li>
                              <span class="num"><?php echo $count ?>.<?php echo $countChild ?></span> <a href="<?php echo $chile['url'];  ?>" ><?php echo $chile['title'];  ?></a></li>
                      <?php  } ?>
                     </ol>
                  </li>

        <?php } } } ?>
                     
                     
                  </ol>
               </div>
            </div>
         </div>
      </section>     
<?php get_footer();
