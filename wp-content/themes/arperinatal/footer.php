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
          <ul>
            <li><a href="">Workgroups</a></li>
            <li><a href="">Resources</a></li>
            <li><a href="">News &amp; Events</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>

        <div class="footer__title-block">
          <span>Latest</span>
          <span>Workgroup<br>Updates</span>
        </div>

        <div class="footer__update-block">
          <div class="col">
            <div class="date">March 16, 2018</div>
            <div class="title"><a href="">Arkansas Newborn Screening Group</a></div>
          </div>
          <div class="col">
            <div class="category context-heading context-heading--c">News</div>
            <div class="excerpt"><a href="">New screening methods go into effect on May 1, 2018</a></div>
          </div>
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