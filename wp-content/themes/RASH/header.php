<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Exemple de thème WordPress</title>
    <!– Ajout d’une nouvelle feuille de style qui sera spécifique à notre thème –>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    
</head>

<body>
        <div class="head-content">
            <div class="blog-header">
                <div class="container-fluid">
                    <div class="row header-link">
                        <div class="col-sm-11 title">
                            <h1 class="blog-title"><?= get_bloginfo('name'); ?></h1>
                        </div>
                        <div class="col-sm-1 nav-social">
                            <?php wp_nav_menu( array('theme_location' => 'social-media') );
                           ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <nav id="navigation-principale" role="navigation" class="menu">
                        <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
                    </nav>
                </div> 
            </div>
        </div>
    <div class="container">

