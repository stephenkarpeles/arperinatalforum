<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arperinatal
 */

?>

    </main>

    <div class="container--max">

      <div class="ankle">
        <?php include('inc/branding.php') ?>
      </div>

    </div>

    <footer class="footer">
    
      <div class="container--max">

        <?php include('inc/feat-post.php') ?>

        <div class="footer__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
        </div>

        <div class="footer__title-block">
          <span>Latest</span>
          <span>Workgroup<br>Updates</span>
        </div>

        <div class="footer__update-block">

          <?php
          $args = array(
            'post_type'   => 'news',
            'posts_per_page' => 1           
          );
           
          $news = new WP_Query( $args );
            if( $news->have_posts() ) :
          ?>
            
            <?php
              while( $news->have_posts() ) :
                $news->the_post();
                ?>
                <?php $get_cat = get_the_category(); ?>

          <div class="col">
            <div class="date"><?php the_date(); ?></div>
            <div class="title"><a href="<?php echo get_site_url(); ?>/workgroups/<?php echo $get_cat[0]->category_nicename; ?>"><?php echo $get_cat[0]->cat_name; ?></a></div>
          </div>
          <div class="col">
            <div class="category context-heading context-heading--c">News</div>
            <div class="excerpt"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
            ?>              
          <?php
          else :
            // no posts found
          endif;
          ?> 
        </div>

        <div class="footer__copyright">
          &copy; <?php echo date("Y"); ?> Arkansas Perinatal Forum
        </div>

      </div>   

    </footer>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <?php wp_footer(); ?>

  </body>
</html>