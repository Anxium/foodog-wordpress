<?php get_header(); ?>
<!-- content search -->

<?php if ( have_posts() ) : ?>

	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <h1 class="page-title"><?php _e( 'Résultat de la recherche pour : ', 'RASH' ); ?><span class="keyword"><?php echo get_search_query(); ?></span></h1>
            </div>
		</div>
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4 col-12">
					<?php the_post_thumbnail('single-post-thumbnail'); ?>
					<?php the_category(); ?>
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php else : ?>
	<div class="container">
		<div class="row">
			<p>Aucun post n'a été trouvé</p>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>