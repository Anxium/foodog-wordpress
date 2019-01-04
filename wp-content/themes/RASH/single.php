<!--
Fichier destiné à représenter les pages des différents articles
Comment by : Axel
-->

<?php get_header(); ?>

<div class="row">
    <div class="col-sm-8 blog-main">

    <?php 
    while(have_posts()) : the_post(); 
    ?>
    
    <span class="category"><?php the_category(); ?></span>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

    <?php
    endwhile;
    ?>
    

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>