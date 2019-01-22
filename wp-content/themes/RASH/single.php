<!--
Fichier destiné à représenter les pages des différents articles
Comment by : Axel
-->

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
    
        <?php 
            while(have_posts()) : the_post(); 
        ?>
        
        <span class="single-category"><?php the_category(); ?></span>
        <h2><?php  the_title(); ?></h2>
        <?php the_post_thumbnail(); ?>

        <div class="down-thumb my-4">
            <div class="single-author">
                <span>by : </span>
                <?php the_author(); ?> 
            </div>

        </div>

        <p><?php the_content(); ?></p>
    



        <?php
            endwhile;
        ?>
        
    
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>