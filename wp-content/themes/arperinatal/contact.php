<?php
/*
 * Template Name: Contact
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

			<h2><?php the_field('content_heading_1'); ?></h2>
			<?php the_field('content_text_1'); ?>

			<h2><?php the_field('content_heading_2'); ?></h2>
			<?php the_field('content_text_2'); ?>

			<?php 
					$contactForm = get_field('contact_form_shortcode', false, false);
          echo do_shortcode($contactForm);
			?>

			<!--
			<div class="form">
				<div class="form__field-wrap">
					<label for="">First and Last name</label><br>
					<input type="text" placeholder="Sheila Awesomesauce"
					onfocus="this.placeholder=''" onblur="this.placeholder='Sheila Awesomesauce'">
				</div>
				<div class="form__field-wrap">
					<label for="">Email Address</label><br>
					<input type="text" placeholder="Email"
					onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
				</div>
				<div class="form__field-wrap">
					<label for="">Message</label><br>
					<textarea placeholder="Message" rows="10"
					onfocus="this.placeholder=''" onblur="this.placeholder='Message'"></textarea>
				</div>			
				<a href="" class="btn--submit">Send message</a>	
			</div>
		-->

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

<?php get_footer(); ?>