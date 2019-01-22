<footer class="container-fluid footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="footer-subtitle">Categories</h4>
                        </div>
                        <div class="col-md-12 footer-cat-menu">
                            <?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="footer-subtitle">Popular posts</h4>
                        </div>
<!-- Popular post -->
<!-- Function post -->                 
            <div class="col-md-12">
               <div>
                  <?php
                     $popular_posts_args = array(
                     'posts_per_page' => 3,
                     'meta_key' => 'my_post_viewed',
                     'orderby' => 'meta_value_num',
                     'order'=> 'DESC'
                     );
                  $popular_posts_loop = new WP_Query( $popular_posts_args );
               ?>
               <?php  while( $popular_posts_loop->have_posts() ): $popular_posts_loop->the_post(); ?>

               <div class="footer-div">
                  <?php if (has_post_thumbnail()) : ?>
                     <a class="hadri-img" href="<?php the_permalink() ?>" title=»<?php the_title_attribute(); ?> » >
                  <?php the_post_thumbnail(); ?></a>
                     <h3 class="footer-title2"><a class="block" href="<?php the_permalink() ?>" title=»<?php the_title_attribute(); ?> »>
                  <?php the_title(); ?></a></h3>
                  <?php endif ?>
               </div>
               <?php  endwhile;
                  wp_reset_query(); ?>
               <!--
               <a href="<?php the_permalink() ?>"> - <?php the_title(); ?></a>
                      -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row division-bottom">
                        <div class="col-md-12 footer-insta">
                            <h4 class="footer-subtitle">Instagram</h4>
                        </div>
                        <div class="col-md-12 footer-insta">
                            <!-- InstaWidget -->
                            <a href="https://instawidget.net/v/tag/cutedogs" id="link-52194829e90539bb02c64185c02ae949fc0be36409a0eae50269b1cf440a4b45">#cutedogs</a>
                            <script src="https://instawidget.net/js/instawidget.js?u=52194829e90539bb02c64185c02ae949fc0be36409a0eae50269b1cf440a4b45&width=300px"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer-bottom">
        <div class="col-sm-12">
            <div class="link-social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div> 
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>