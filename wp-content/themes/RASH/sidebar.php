<div class="offset-sm-1 col-sm-3 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset row">

       <?php
            if( is_active_sidebar( 'zone-widgets-2' ) ):
                dynamic_sidebar( 'zone-widgets-2' );
            endif;
        ?>

    </div>
</div>