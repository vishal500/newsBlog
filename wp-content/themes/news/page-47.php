 <?php get_header();  ?>

<style type="text/css">
	#map iframe{
		width: 100%;
		height: 300px;
	}
</style>
  <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Contact Us For Any Queries</h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h6 class="font-weight-bold">Get in touch</h6>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Our Office</h6>
                                <p class="m-0"><?php  echo doCustomSetting('address');  ?></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Email Us</h6>
                                 <p  class="m-0"><a class="text-dark" href="mailto:<?php  echo doCustomSetting('email');  ?>"><?php  echo doCustomSetting('email');  ?></a></p>
                                                <p  class="m-0"><a class="text-dark" href="mailto:<?php  echo doCustomSetting('email_2');  ?>"><?php  echo doCustomSetting('email_2');  ?></a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Call Us</h6>
                                <p class="m-0"><a class="text-dark" href="tel:<?php  echo doCustomSetting('contact_no');  ?>"><?php  echo doCustomSetting('contact_no');  ?></a></p>
                                 <p  class="m-0"><a class="text-dark" href="tel:<?php  echo doCustomSetting('contact_no_2');  ?>"><?php  echo doCustomSetting('contact_no_2');  ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form bg-light mb-3" style="padding: 30px;">
                    	 <?php echo  do_shortcode('[contact-form-7 id="13" title="Contact Us" html_class="contact-form" html_id="contactForm"]'); ?>

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
        <div id="map" class="mt-10">
            <?php  echo doCustomSetting('google_map');  ?>
        </div>
    <?php get_footer();
