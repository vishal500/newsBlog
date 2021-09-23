   <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <a  href="<?php echo home_url('/'); ?>"><img src="<?php echo siteLogo()[0] ?>" class="footlogo" alt="<?php echo siteLogo()[1] ?>" /></a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php  echo doCustomSetting('facebook');  ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php  echo doCustomSetting('linked_in');  ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php  echo doCustomSetting('instagram');  ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php  echo doCustomSetting('youtube');  ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                                 <?php
  $menu =  wp_get_nav_menu_items('header-menu') ; 
 if (count($menu) > 0) {
   foreach($menu as $value){
    ?>
             <a href="<?php echo $value->{'url'};  ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $value->{'title'};  ?></a>


   <?php } }  

   ?>  
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <?php
  $menu =  wp_get_nav_menu_items('Quick Menu 1') ; 
 if (count($menu) > 0) {
   foreach($menu as $value){
    ?>
             <a href="<?php echo $value->{'url'};  ?>" class="text-secondary mb-2">
                <i class="fa fa-angle-right text-dark mr-2"></i><?php echo $value->{'title'};  ?>
            </a>


   <?php } }  

   ?>  
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-12 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Madhyam Tech</a>. All Rights Reserved.</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();  ?>/website/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri();  ?>/website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo get_template_directory_uri();  ?>/website/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo get_template_directory_uri();  ?>/website/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo get_template_directory_uri();  ?>/website/js/main.js"></script>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML ="<?php echo date("F Y,d"); ?> "+ currentTime;
        }
  
        showTime();
    </script>
      <?php wp_footer() ?>
</body>

</html>