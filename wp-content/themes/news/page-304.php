<?php get_header();  ?>

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                 <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                       <h3 class="m-0">Category</h3>
                     </div>
                  </div>


                <div class="col-lg-12">
                    <div class="row">
                     <?php 
                     $get_parent_cats = ['parent' => '0',
                     'hide_empty' => false ];
                       $all_categories = get_categories( $get_parent_cats );//get parent categories 

                       if (count($all_categories) > 0) {
                            foreach($all_categories as $single_category){ 
                                 $catID = $single_category->cat_ID;
                                if ( $single_category->name <> 'Uncategorized') {
                                $img = z_taxonomy_image_url($single_category->term_id);
                                if ($img == '') {
                                    $img =  get_template_directory_uri()."/website/img/Untitled-17.jpg";
                                }
                             ?>

                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php echo $img; ?>" alt="<?php echo $single_category->name ; ?>" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <a class="h4" href="<?php echo get_category_link( $catID ) ; ?>"><?php echo $single_category->name ; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php   } }  } ?>
                    </div>
               
                    
             
                </div>

              
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->

 

<?php get_footer();
