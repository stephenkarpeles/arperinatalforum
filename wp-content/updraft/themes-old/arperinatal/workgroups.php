<?php
/*
 * Template Name: Workgroups
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

<section>
	<div class="container container--flex">
		<div class="content">

			<p class="intro"><?php the_field('intro'); ?></p>
      <p><?php the_field('intro_secondary'); ?></p>		

		</div><!-- .content -->

		<aside class="aside aside--pulled-up">
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
		    </div>
		  </div> 
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
    </div>

  </div>
</section>

<section class="cards">
  <div class="container">

    <div class="grid">
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

    <div class="grid">
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

<?php get_footer(); ?>