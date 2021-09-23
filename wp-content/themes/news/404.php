<?php
get_header();
?>
    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center py-4">
                <h1 class="error">404</h1>
                <h2>Page not Found</h2>
                <p><b>We're sorry, but the page you were looking for doesn't exist.</b></p>
                <div class="mt-30"> <a href="<?php echo home_url('/') ?>" class="dark-button button-md">Back Home</a> </div>
            </div>
        </div>
    </div>

<?php
get_footer(); ?>
