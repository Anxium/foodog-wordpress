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
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6 col-12 header-title-div d-flex justify-content-center align-items-center">
                <h1 class="header-title"><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            </div>
            <div class="col-md-3 col-12 header-social-nav-div d-flex">
                <nav class="header-social-nav">
                    <?php wp_nav_menu( array('theme_location' => 'header-social-menu') ); ?>
                </nav>
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

