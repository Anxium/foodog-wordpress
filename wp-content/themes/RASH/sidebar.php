<div class="offset-sm-1 col-sm-3 blog-sidebar">
    <div class="row">
        <div class="sidebar col-md-12 d-flex flex-column align-items-center">
       
       <?php
            if( is_active_sidebar( 'zone-widgets-2' ) ):
                dynamic_sidebar( 'zone-widgets-2' );
            endif;
        ?>

        </div>

    </div>
</div>