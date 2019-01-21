<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemple de thème WordPress</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid mb-4">
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6 col-12 header-title-div d-flex justify-content-center align-items-center">
                <h1 class="header-title"><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            </div>
            <div class="col-md-3 col-12 header-social-nav-div d-flex">
                <nav class="header-social-nav">
                    <?php wp_nav_menu( array('theme_location' => 'header-social-menu') ); ?>
                </nav>

                <div class="header-search">
                    <button type="button" class="search-button" data-toggle="modal" data-target="#search">
                        <i class="fas fa-search"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="searchModal">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                <?php
                                    if( is_active_sidebar( 'zone-widgets-1' ) ):
                                        dynamic_sidebar( 'zone-widgets-1' );
                                    endif;
                                ?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <nav class="header-main-nav">
                    <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
                </nav>
            </div>
        </div>
    </div>

