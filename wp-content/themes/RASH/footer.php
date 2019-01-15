</div>

<footer class="footer1">
   <div class="container">
      <div class="row gallery-bottom">
         <div class="col-sm-4">

            <a href="#" class="category_footer">Categories</a>
            <div class="footer-link">
               <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
            </div>
         </div>
         <div class="col-sm-4">
            <a href="#" class="category_footer">Popular Posts</a>
            <div>

               <?php /*
                     if( is_active_sidebar( 'zone-widgets-2' ) ):
                     dynamic_sidebar( 'zone-widgets-2' );
                     endif;
            */   ?>

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
               <div class="footer_div">
                  <?php if (has_post_thumbnail()) : ?>
                  <a class="hadri-img" href="" title=»<?php the_title_attribute(); ?> » >
                     <?php the_post_thumbnail(); ?></a>
                  <h3 class="title2"><a class="block" href="" title=»<?php the_title_attribute(); ?> »>
                        <?php the_title(); ?></a></h3>
                  <?php endif ?>
               </div>
               <?php  endwhile;
wp_reset_query(); ?>
               <!--
               <a href="</*?php the_permalink() ?>"> - <?php the_title(); ?></a>
                  <img class="block " src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster"><span class="lorem">  Evenlet Ut Molesti</span><br>
                  <img class="block " src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster"><span class="lorem">  Earum Rerum Tenet</span><br>
                  <img class="block " src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster"><span class="lorem">  Evenlet Ut Molesti</span><br>
                  <img class="block " src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster"><span class="lorem">  Earum Rerum Tenet</span><br>
                      -->
            </div>
         </div>
         <div class="col-sm-4 ">
            <a href="#" class="category_footer">Instagram</a>
            <!-- InstaWidget -->
            <a href="https://instawidget.net/v/tag/cutedogs" id="link-52194829e90539bb02c64185c02ae949fc0be36409a0eae50269b1cf440a4b45">#cutedogs</a>
            <script src="https://instawidget.net/js/instawidget.js?u=52194829e90539bb02c64185c02ae949fc0be36409a0eae50269b1cf440a4b45&width=300px"></script>
            <!--
                    <div class="row">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                    </div>
                  <div class="row">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                    </div>
                  <div class="row">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
                        <img class="block" src="https://igx.4sqi.net/img/general/200x200/0_OGr2UYgM7kwo1CB-AMVaDzY2rtFT3Ae7jf21-FEvY.jpg" alt="poster">
   -->
         </div>
      </div>
   </div>
   
   <div class="footer2">
      <div class="container-fluid footer-copy">
         <div class="row">
            <div class="col-sm-12 text-center">
               <p><strong>copyright © 2013-2018 All right reserved.</strong></p>
            </div>
         </div>
      </div>
   </div>


</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>