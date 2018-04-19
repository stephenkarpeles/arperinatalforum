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

			<h2>Contact Information</h2>
			<p>Call us at <a href="">501-280-4516</a>.</p>
			<p>
				Family Health Branch, Center for Health Advancement<br>
			  Arkansas Department of Health<br>
			  4815 West Markham Street, Slot 16<br>
			  Little Rock, AR 72205
		  </p>
		  <p><a href="">Get Directions</a></p>

			<h2>Send Us a Message</h2>
			<p>Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus, vitae ullamcorper metus. Sed sollicitudin ipsum quis nunc sollicitudin ultrices. Donec euismod scelerisque ligula. Maecenas eu varius risus, eu alique.</p>	

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