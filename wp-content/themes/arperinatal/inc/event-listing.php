<div class="feat-heading">
  <div class="feat-heading__content">
    <span>Upcoming</span>
    <span>Events</span>
  </div>
</div>

<?php
  $args = array(
    'post_type'   => 'event'
   );
   
  $events = new WP_Query( $args );
    if( $events->have_posts() ) :
  ?>

  <div class="event-listing">
      
    <?php
      while( $events->have_posts() ) :
        $events->the_post();
        ?>
        
          <div class="event-listing__event">
            <div class="event-listing__date">
              <?php the_field('event_date'); ?>
            </div>
            <div class="event-listing__title">
              <a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a>
            </div>
          </div>
        <?php
    endwhile;
    wp_reset_postdata();
  ?>  

  <div class="event-listing__more-link">
    <a href="<?php echo get_page_link(9); ?>">Find more events</a>
  </div>
</div>                
<?php
else :
// no posts found
 echo '<div class="no-posts-displayed">No events to display.</div>';
endif;
?>  