
<?php get_header(); ?>

<div class="row">
    
    <div class="col-12 hero mb-5">
        <div class="row">

            <?php if($hero_one -> have_posts()) : while($hero_one -> have_posts()) : $hero_one -> the_post(); ?>
                
                <div class="blog-post big-img col-lg-7 col-md-12 mt-4">
                    <?php the_post_thumbnail('single-post-hero'); ?>
                    <h4 class="blog-post-category my-3"><?php the_category(); ?></h4>
                    <h3 class="blog-post-title mt-3 mb-4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                </div>

            <?php endwhile; endif; ?>
            
            <div class="col-lg-5 col-md-12">
                <div class="row">
                    
                <?php if($hero -> have_posts()) : while($hero -> have_posts()) : $hero -> the_post(); ?>
                    
                    <div class="blog-post hero col-lg-6 col-md-6 col-12 mt-4">
                        <?php the_post_thumbnail('post-hero'); ?>
                        <h3 class="hero-title my-1"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                    </div>
    
                <?php endwhile; endif; ?>
                
                </div>
            </div>

        </div>
    </div>

    <!-- Contenu principal de l'index -->
    <div class="col-md-8 blog-main">

    <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array(
            'posts_per_page' => 6,
            'paged'          => $paged,
        ));
    ?>

    <?php if($query -> have_posts()) : ?>
    
        <h2 class="category-title">Latests posts</h2>
        <div class="row"> 

            <?php while($query -> have_posts()) : $query -> the_post(); ?>
            
            <div class="blog-post col-lg-6 col-md-12 mt-4">
                <?php the_post_thumbnail('post-thumbnail'); ?>
                <h4 class="blog-post-category my-3"><?php the_category(); ?></h4>
                <h3 class="blog-post-title mt-3 mb-4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                <div class="blog-post-resume">
                    <?php the_excerpt() ?>
                </div>
            </div>

            <?php endwhile; ?>

            <div class="col-12">
                <?php echo paginate_links( array(
                    'prev_text' => __('<'),
                    'next_text' => __('>'),
                )); ?>
            </div>

        </div>

    <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
