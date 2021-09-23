<?php get_header(); 
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
  if ($url == '') {
   	$url = get_template_directory_uri().'/website/images/contact.jpg';
   } 
?>
<style type="text/css">
	.contact-form button{
            background: #4078bd !important;
    font-size: 11px !important;
    font-weight: 500 !important;

    color: #fff !important;    width: 100px !important;

    }
    .wpcf7-form label{
            width: 100%;

    }


element.style {
}
.contact-form .wpcf7-submit {

    background: #4078bd;
    color: #fff !important;
}
</style>
  <div class="page-title-section" style="background-image: url('<?php echo $url; ?>');">
            <div class="container">
                <h1><?php the_title( ); ?></h1>
                <ul>
                    <li><a href="<?php echo home_url( '/'); ?>">Home</a></li>
                    <li><a href="<?php echo get_permalink( ); ?>"><?php the_title( ); ?></a></li>
                </ul>
            </div>
        </div>
        <div class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-12">
                        <div class="section-heading mt-15">
                            <h4>Let's Talk about Your Business</h4>
                            <div class="section-heading-line-left"></div>
                        </div>
                        <div class="contact-form-box mt-30">
                                       <?php echo  do_shortcode('[contact-form-7 id="13" title="Contact Us" html_class="contact-form"]'); ?>
   

                       <?php //echo  do_shortcode('[wpforms id="130"]	'); ?>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-12">
                        <div class="contact-info-box">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="contact-info-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-4 center-holder"><i class="fa fa-phone"></i></div>
                                            <div class="col-md-10 col-sm-10 col-8">
                                                <h4>Call Us</h4>
                                                <p><a class="" href="tel:<?php  echo doCustomSetting('contact_no');  ?>"><?php  echo doCustomSetting('contact_no');  ?></a></p>
                                                <p><a class="" href="tel:<?php  echo doCustomSetting('contact_no_2');  ?>"><?php  echo doCustomSetting('contact_no_2');  ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="contact-info-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-4 center-holder"><i class="fa fa-envelope-open"></i></div>
                                            <div class="col-md-10 col-sm-10 col-8">
                                                <h4>Message</h4>
                                                <p><a class="" href="mailto:<?php  echo doCustomSetting('email');  ?>"><?php  echo doCustomSetting('email');  ?></a></p>
                                                <p><a class="" href="mailto:<?php  echo doCustomSetting('email_2');  ?>"><?php  echo doCustomSetting('email_2');  ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="contact-info-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-4 center-holder"><i class="fa fa-globe"></i></div>
                                            <div class="col-md-10 col-sm-10 col-8">
                                                <h4>Our Location</h4>
                                                <p><?php  echo doCustomSetting('address');  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="mt-10">
            <?php  echo doCustomSetting('google_map');  ?>
        </div>


<?php get_footer();
