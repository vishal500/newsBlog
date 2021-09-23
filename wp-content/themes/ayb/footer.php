 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="mt-25">
                              <a  href="<?php echo home_url('/'); ?>"><img src="<?php echo siteLogo()[0] ?>" class="footlogo" alt="<?php echo siteLogo()[1] ?>" /></a>
                            <div class="footer-social-icons mt-25">
                                <ul>
                                    <li>
                                        <a href="<?php  echo doCustomSetting('facebook');  ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php  echo doCustomSetting('linked_in');  ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>

                                    <li>
                                        <a href="<?php  echo doCustomSetting('youtube');  ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                     <li>
                                        <a href="<?php  echo doCustomSetting('instagram');  ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                           <?php
  $menu =  wp_get_nav_menu_items('Quick Menu 1') ; 
 if (count($menu) > 0) {
   foreach($menu as $value){
    ?>
                      <li>
                            <a href="<?php echo $value->{'url'};  ?>"><?php echo $value->{'title'};  ?></a>
                        </li>

   <?php } }  

   ?>                     

   </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                                                    <?php
  $menu =  wp_get_nav_menu_items('Quick Menu 2') ; 
 if (count($menu) > 0) {
   foreach($menu as $value){
    ?>
                      <li>
                            <a href="<?php echo $value->{'url'};  ?>"><?php echo $value->{'title'};  ?></a>
                        </li>

   <?php } }  

   ?>  
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-12">
                        <h3>Contact Us</h3>
                        <div class="d-flex">
                            <ul class="footer-list mr-2">
                                <i class="fa fa-map text-white"></i>
                            </ul>
                            <ul class="footer-list">
                                <p><?php  echo doCustomSetting('address');  ?></p>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="footer-list mr-2">
                                <i class="fa fa-phone text-white"></i>
                            </ul>
                            <ul class="footer-list">
                                <p><a class="wht" href="tel:<?php  echo doCustomSetting('contact_no');  ?>"><?php  echo doCustomSetting('contact_no');  ?></a></p>
                                <p><a class="wht" href="tel:<?php  echo doCustomSetting('contact_no_2');  ?>"><?php  echo doCustomSetting('contact_no_2');  ?></a></p>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="footer-list mr-2">
                                <i class="fa fa-envelope-open text-white"></i>
                            </ul>
                            <ul class="footer-list">
                                <p><a class="wht" href="mailto:<?php  echo doCustomSetting('email');  ?>"><?php  echo doCustomSetting('email');  ?></a></p>
                                <p><a class="wht" href="mailto:<?php  echo doCustomSetting('email_2');  ?>"><?php  echo doCustomSetting('email_2');  ?></a></p>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="footer-bar"> 
                    <p> <span class="primary-color">AYB</span> © <?php echo date('Y'); ?>. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        
        <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/owl.carousel.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/navigation.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/navigation.fixed.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/jquery.counterup.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/waypoints.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/tabs.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/jquery.mb.YTPlayer.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/swiper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/switcher.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/modernizr.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/map.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/website/js/main.js"></script>
          <?php 
            if ( get_the_ID() == 171) { ?>
        <script id="rendered-js" type="module">
         import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3";
         import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom";
         import lgShare from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/share";
         // import lgHash from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/hash";
         lightGallery(document.getElementById("gallery-container"), {
           speed: 500,
           plugins: [lgZoom, lgShare] });
      </script>
           <?php  }
         ?>

         <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <?php wp_footer() ?>
    </body>
</html>
