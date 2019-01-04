
<?php get_header(); ?>

<div class="row">
    <div class="col-md-8 blog-main">
        <h2 class="category-title">Latests posts</h2>
        <div class="row">
        <?php 
        if(have_posts()) : while(have_posts()) : the_post();
        get_template_part('content', get_post_format() );
        endwhile; endif;
        ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
