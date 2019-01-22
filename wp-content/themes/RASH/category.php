
<?php get_header(); ?>

<!-- Titre de la page -->
<div class="container-fluid">
    <div class="row my-4 d-flex justify-content-center">
        <div class="category-title-div d-flex justify-content-center">
            <h1 class="category-title"><?php single_cat_title(); ?></h1>
        </div>
    </div>
</div>

<!-- Contenu principal de la page -->
<div class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="row">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="category-post col-md-12 my-5">
                        <div class="row">
                            <div class="category-div-img col-md-6 col-12">
                                <?php the_post_thumbnail('post-thumbnail'); ?>
                            </div>
                            <div class="category-post-body col-md-6 col-12">
                                <h4 class="category-post-cat"><?php the_category(); ?></h4>
                                <h3 class="category-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                                <div class="category-post-resume">
                                    <?php the_excerpt() ?>
                                </div>
                                <div class="category-post-share">
                                    <a class="link-share" href="#"><i class="fas fa-share share"></i></a>
                                    <span>Share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <?php // get_sidebar(); ?>
    </div>
</div>

<?php // get_footer(); ?>
