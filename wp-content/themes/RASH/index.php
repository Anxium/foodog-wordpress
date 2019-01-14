
<?php get_header(); ?>

<div class="row">
    
    <div class="col-12 hero mb-5">
        <div class="row">

            <?php if($latest_first -> have_posts()) : while($latest_first -> have_posts()) : $latest_first -> the_post(); ?>
                
                <div class="blog-post big-img col-lg-7 col-md-12 mt-4">
                    <?php the_post_thumbnail('single-post-hero'); ?>
                    <h4 class="blog-post-category my-3"><?php the_category(); ?></h4>
                    <h3 class="blog-post-title mt-3 mb-4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                </div>

            <?php endwhile; endif; ?>
            
            <div class="col-lg-5 col-md-12">
                <div class="row">
                    
                <?php if($latest_content -> have_posts()) : while($latest_content -> have_posts()) : $latest_content -> the_post(); ?>
                    
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
            $args = array(
              'posts_per_page' => 6,
              'paged'          => $paged
            );
            $query = new WP_Query( $args );
        ?>
        
        <?php if($latest_end -> have_posts()) : ?>

        <h2 class="category-title">Latests posts</h2>
        <div class="row"> 

            <?php while($latest_end -> have_posts()) : $latest_end -> the_post(); ?>
            
            <div class="blog-post col-lg-6 col-md-12 mt-4">
                <?php the_post_thumbnail('post-thumbnail'); ?>
                <h4 class="blog-post-category my-3"><?php the_category(); ?></h4>
                <h3 class="blog-post-title mt-3 mb-4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                <div class="blog-post-resume">
                    <?php the_excerpt() ?>
                </div>
            </div>

            <?php endwhile; endif; ?>


            <?php 
                $pageArg = array(
                    'prev_text' => __('<'),
                    'next_text' => __('>'),
                );
            ?>
            
            <div class="col-12 d-flex justify-content-center last-page">
                <?php echo paginate_links($pageArg); ?>
            </div>

        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
