<?php
/**
 * Template Name: Search Page
 */

?>
<?php get_header(); ?>
     <div class="section-block pb-0">
         <div class="container">
            <form class="contact-form" method="GET" action="<?php echo home_url('/') ?>">
               <div class="row">
                  <div class="col-md-10"> 
                     <input type="text"  placeholder="Enter keywords...." name="s" required="required"> 
                  </div>
                  <div class="col-md-2 mb-30">
                     <div class="center-holder"> <button type="submit" class="mt-2">Search</button> </div>
                  </div>
               </div>
            </form>
         </div>
      </div>

<?php get_footer();
