<div class="blog-post col-md-6">
    <?php the_post_thumbnail('single-post-thumbnail'); ?>
    <p class="blog-post-category"><?php the_category(); ?></p>
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
    <?php the_excerpt() ?>
</div>