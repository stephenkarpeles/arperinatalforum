<?php
/*
 * Template Name: Homepage
 * @package WordPress
 */
?>

<?php get_header(); ?>

<div class="hero__home-wrap">
  <section class="hero hero--homepage" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">

    <div class="hero__foreground">
      <div class="hero__subtext">
        <?php the_field('subheading'); ?>
      </div>
      <div class="hero__title">
        <h1><?php the_field('main_heading'); ?></h1>
      </div>
      <div class="hero__link">
        <a href="<?php the_field('link_url'); ?>"><?php the_field('link_text'); ?></a>
      </div>
    </div>
  </section>

  <section class="hero-base no-padding">
    <div class="container--max">
      <div class="hero-base__clock">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-clock.svg" alt="">
      </div>

      <div class="hero-base__title-block">
        <span>Latest</span>
        <span>Workgroup<br>Updates</span>
      </div>

      <div class="hero-base__update-block">


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


      <div class="feat-post hero-base__feat-post">

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

                <?php
            endwhile;
            wp_reset_postdata();
          ?>              
        <?php
        else :
          // no posts found
        endif;
        ?>  


          <?php
            $args = array(
              'post_type'       => 'news',
              'posts_per_page'  => 1,
              'offset'          => 2
            );
             
            $news = new WP_Query( $args );
              if( $news->have_posts() ) :
            ?>
              
              <?php
                while( $news->have_posts() ) :
                  $news->the_post();
                  ?>

                  <div class="feat-post__date feat-post__date--secondary">
                    <?php the_date(); ?>
                  </div>
                  <div class="feat-post__excerpt feat-post__excerpt--secondary"> 
                    <a href=""><?php the_title(); ?></a>
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
          
        </div><!-- .feat-post__content -->

      </div><!-- .feat-post -->

    </div>
    <div class="hero-base__style-block">
    </div>
  </section>
</div>

<section class="huge-padding-top">
  <div class="container container--flex">
    <div class="content content--home">

      <p class="intro"><?php the_field('intro'); ?></p>
      <h2><?php the_field('content_heading_1'); ?></h2>

      <div class="grid half-col-block padded-left">
        <div class="grid__col">
          <p><?php the_field('content_column_1'); ?></p>
        </div>
        <div class="grid__col">
          <p><?php the_field('content_column_2'); ?></p>
          <div class="cta cta--fancy">
            <a href="<?php the_field('content_link_url'); ?>"><?php the_field('content_link_text'); ?></a>
          </div>
        </div>
      </div><!-- .grid -->

    </div><!-- .content -->

    <aside class="aside aside--padding-top aside--home">

      <?php include('inc/event-listing.php') ?>   
      
    </aside>

  </div><!-- .container -->
</section>

<section class="no-padding-bottom"> 
  <div class="container--max">

    <div class="feat-heading__wrap">
      <div class="feat-heading__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/baby_sleep.jpg" alt="">
      </div>
      <div class="feat-heading feat-heading--alt">
        <div class="feat-heading__content">
          <span><?php the_field('callout_upper_text'); ?></span>
          <span><?php the_field('callout_lower_text'); ?></span>
        </div>
      </div>
      <div class="feat-heading__caption">
        <span><?php the_field('callout_deck'); ?></span>
        <a href="<?php the_field('callout_link_url'); ?>"><?php the_field('callout_link_text'); ?></a>
      </div>
    </div>

  </div>
</section>

<section class="cards">
  <div class="container">

    <div class="grid third-col-block">     

      <?php

        $args = array( 'hide_empty' => '0');
        $categories = get_categories($args);
        if($categories){
          foreach($categories as $category) {

            echo '<div class="grid__col">';
            
            echo '<div class="card__logo"><img src="' . get_stylesheet_directory_uri() . '/img/rectangle@2x.png" alt="Alt Tag"></div>';
            echo '<div class="card">';
            echo '<div class="card__title"><h3>' . $category->name . '<h3></div>';
            echo '<div class="card__content">';
              echo '<div class="card__contact">' . get_field('region', 'category_'.$category->term_id) . '<br>';
                echo '<a href="tel:' . get_field('phone_number', 'category_'.$category->term_id) . '">' . get_field('phone_number', 'category_'.$category->term_id) . '</a><br>';
                echo '<a href="' . get_field('contact_link', 'category_'.$category->term_id) . '">Contact Us</a>';
              echo '</div>';

              // $image = get_field('nameofimagefield', 'category_'.$category->term_id);
              // echo '<img src="' . $image . ' />'; //change depending on the return value of the image field
              echo '<div class="card__description">' . get_field('description', 'category_'.$category->term_id) . '</div>';
              echo '<div class="card__link"><a href="' . get_site_url() . "/workgroups/" . $category->slug . '">Learn More</a></div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';

          } 
        }    
      ?>     
      
    </div><!-- .grid -->

  </div>
</section>

<section>
  <div class="container">

    <div class="funding-block">
      <div class="funding-block__image">
        <img src="<?php the_field('funding_image'); ?>" alt="">
      </div>
      <div class="funding-block__col-1">
        <?php the_field('funding_text_column_1'); ?>
      </div>
      <div class="funding-block__col-2">
        <?php the_field('funding_text_column_2'); ?>
      </div>
    </div>  
    
  </div>
</section>

<?php get_footer(); ?>