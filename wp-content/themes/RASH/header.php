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
    <?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav id="navigation-principale" role="navigation"> 
                <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title"><?= get_bloginfo('name'); ?></h1>
            <p class="lead blog-description"><?= get_bloginfo('description'); ?></p>
        </div>