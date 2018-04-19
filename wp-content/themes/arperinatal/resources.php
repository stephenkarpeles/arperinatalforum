<?php
/*
 * Template Name: Resources
 * @package WordPress
 */
?>

<?php get_header(); ?>

<section class="hero hero--interior" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
  <div class="hero__overlay"></div>

	 <div class="hero__foreground">
    <div class="hero__subtext">
      <?php the_field('subheading'); ?>
    </div>
    <div class="hero__title">
      <h1><?php the_field('main_heading'); ?></h1>
    </div>
  </div>
</section>

<section class="no-padding-bottom"> 
  <div class="container container--flex-start">
    <?php include('inc/select-block.php') ?>
  </div>    
</section>

<section class="cards">
  <div class="container">

    <div class="resource-group">

      <div class="resource-grid">
        <div class="resource-grid__col-one-quarter">
          <?php include('inc/card-workgroup.php') ?>
        </div>

        <div class="resource-grid__col-three-quarters">

          <div class="grid third-col-block">

              <?php
              $args = array(
                'post_type'   => 'resource',
               );
               
              $resources = new WP_Query( $args );
                if( $resources->have_posts() ) :
              ?>
                
                  <?php
                    while( $resources->have_posts() ) :
                      $resources->the_post();
                      ?>
                        <div class="grid__col">
                          <div class="card card--resource">
                            <div class="card__resource-type">
                              <span><?php the_field('resource_type'); ?></span>
                            </div>
                            <div class="card__title">
                              <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="card__content">
                              <div class="card__description">
                                <?php the_field('resource_file_name'); ?>
                              </div>
                              <div class="card__link">
                                <a href="<?php the_field('resource_link_url'); ?>"><?php the_field('resource_link_text'); ?></a>
                              </div>
                            </div>
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

          <div class="view-all-block">
            <a href="">Show more resources</a>
          </div>
          
        </div>
      </div><!-- .grid -->

    </div>

    <div class="resource-group">

      <div class="resource-grid">
        <div class="resource-grid__col-one-quarter">
          <?php include('inc/card-workgroup.php') ?>
        </div>

        <div class="resource-grid__col-three-quarters">
          <div class="grid third-col-block">
            
            <div class="grid__col">
              <?php include('inc/card-resource.php') ?>
            </div>

            <div class="grid__col">
              <?php include('inc/card-resource.php') ?>
            </div>
          </div>
        </div>

      </div><!-- .grid -->

    </div>

    <div class="resource-group">

      <div class="resource-grid">
        <div class="resource-grid__col-one-quarter">
          <?php include('inc/card-workgroup.php') ?>
        </div>

        <div class="resource-grid__col-three-quarters">
          <div class="grid third-col-block">
            
            <div class="grid__col">
              <?php include('inc/card-resource.php') ?>
            </div>

            <div class="grid__col">
              <?php include('inc/card-resource.php') ?>
            </div>

            <div class="grid__col">
              <?php include('inc/card-resource.php') ?>
            </div>
          </div>

          <div class="view-all-block">
            <a href="">Show more resources</a>
          </div>
        </div>

      </div><!-- .grid -->

    </div>

  </div>
</section>

<?php include('inc/return-to-top.php') ?>

<?php get_footer(); ?>