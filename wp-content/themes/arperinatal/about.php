<?php
/*
 * Template Name: About
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

			<h2>
				<?php the_field('content_heading_1'); ?>
			</h2>
			
			<?php the_field('content_text_1'); ?>

			<h2>
				<?php the_field('content_heading_2'); ?>
			</h2>
			
			<?php the_field('content_text_2'); ?>

			<h2>
				<?php the_field('content_heading_3'); ?>
			</h2>

			<?php the_field('content_text_3'); ?>

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
		      <div class="feat-post__date feat-post__date--secondary">
		        March 16, 2018
		      </div>
		      <div class="feat-post__excerpt feat-post__excerpt--secondary"> 
		        This news post title cuts off after 50ish characters…
		      </div>
		    </div>
		  </div> 

		  <?php include('inc/event-listing.php') ?> 
		</aside>
	</div><!-- .container -->
</section>

<section class="no-padding-bottom"> 
  <div class="container--max">

    <div class="feat-heading__wrap">
      <div class="feat-heading feat-heading--alt">
        <div class="feat-heading__content">
          <span><?php the_field('callout_upper_text'); ?></span>
          <span><?php the_field('callout_lower_text'); ?></span>
        </div>
      </div>
    </div>

  </div>
</section>

<section>
	<div class="container">
		<div class="content">
			<p class="intro"><?php the_field('callout_intro'); ?></p>
			<p><?php the_field('callout_intro_secondary'); ?></p>
		</div>
	</div>
</section>

<section class="no-padding-top">
	<div class="container">
		<div class="content">

			<div class="grid half-col-block col-desktop-switch">
		    <?php if( have_rows('bio_card') ): ?>

					<?php while( have_rows('bio_card') ): the_row(); 

							$first = get_sub_field('first_name');
							$last  = get_sub_field('last_name');
							$title = get_sub_field('title');
							$phone = get_sub_field('phone_number');
							$email = get_sub_field('email_address');
							$blurb = get_sub_field('blurb');

						?>

						<div class="grid__col">

							<div class="card card--bio">
							  <div class="card__title">
							    <h3><?php echo $first; ?> <?php echo $last; ?></h3>
							    <span><?php echo $title; ?></span>
							  </div>
							  <div class="card__content">
							    <div class="card__contact">
							      <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
							      <a href="mailto:<?php echo $email; ?>">Email <?php echo $first; ?></a>
							    </div>
							    <div class="card__description">
							      <?php echo $blurb; ?>
							    </div>    
							  </div>
							</div>

						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .grid -->

    </div><!-- .content -->
	</div><!-- .container -->
</section>		

<?php get_footer(); ?>