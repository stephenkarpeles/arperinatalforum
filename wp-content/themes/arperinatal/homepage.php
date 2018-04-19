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
        <div class="col">
          <div class="date">March 16, 2018</div>
          <div class="title"><a href="">Arkansas Newborn Screening Group</a></div>
        </div>
        <div class="col">
          <div class="category context-heading context-heading--c">News</div>
          <div class="excerpt"><a href="">New screening methods go into effect on May 1, 2018</a></div>
        </div>
      </div>

      <div class="feat-post hero-base__feat-post">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/family_baby.jpg" alt="">
        <div class="feat-post__content">
          <div class="feat-post__date">
            March 16, 2018
          </div>
          <div class="feat-post__excerpt">
            This is a news post title that cuts off after something like 75 characters or so…
          </div> 
          <div class="feat-post__cta">
            <a href="">Read more</a>
          </div> 
          <div class="feat-post__date feat-post__date--secondary">
            March 16, 2018
          </div>
          <div class="feat-post__excerpt feat-post__excerpt--secondary"> 
            <a href="">This news post title cuts off after 50ish characters…</a>
          </div>
        </div>
      </div>
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
      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">            
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">            
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>
    </div><!-- .grid -->

  </div>
</section>

<section>
  <div class="container">

    <div class="funding-block">
      <div class="funding-block__image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
      </div>
      <div class="funding-block__col-1">
        <p>This project is supported by the <a href="">Arkansas Department of Health</a> (ADH) through funding from the Health Resources and Services Administration (HRSA) of the U.S. Department of Health and Human Services (HHS), under grant number B04MC30599, Maternal and Child Health Services.</p>
      </div>
      <div class="funding-block__col-2">
        <p>This information or content and conclusions are those of the author and should not be construed as the official position or policy of, nor should any endorsements be inferred by the ADH, HRSA, HHS, or the U.S. Government.</p>
      </div>
    </div>  
    
  </div>
</section>

<?php get_footer(); ?>