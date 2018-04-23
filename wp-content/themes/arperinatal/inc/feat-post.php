<div class="feat-post">

  <?php
    $args = array(
      'post_type'       => 'news',
      'posts_per_page'  => 1,
      'offset'          => 1
    );
     
    $news = new WP_Query( $args );
      if( $news->have_posts() ) :
    ?>
          
    <?php
      while( $news->have_posts() ) :
        $news->the_post();
        ?>

          <?php 
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
            $thumb_url = $thumb_url_array[0];
          ?>
  <img src="<?php echo $thumb_url ?>" alt="Featured Post">
  <div class="feat-post__content">
    <div class="feat-post__date">
      <?php the_date(); ?>
    </div>
    <div class="feat-post__excerpt">
      <?php the_title(); ?>
    </div> 
    <div class="feat-post__cta">
      <a href="<?php echo the_permalink(); ?>">Read more</a>
    </div>           
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