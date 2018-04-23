<?php get_header(); 

	// get the current taxonomy term
	$term = get_queried_object();

	// vars
	$intro 							= get_field('intro', $term);
	$intro_secondary 		= get_field('intro_secondary', $term);
	$address 						= get_field('address', $term);
	$contact_link 			= get_field('contact_link', $term);
	$phone_number 			= get_field('phone_number', $term);
	$email_address 		  = get_field('email_address', $term);
	$website_address 		= get_field('website_address', $term);
	$facebook_url 			= get_field('facebook_url', $term);
  $twitter_url 				= get_field('twitter_url', $term);

	$name 						= get_field('name', $term);
	$abbreviation 		= get_field('abbreviation', $term);
	$description 			= get_field('description', $term);
	$region 					= get_field('region', $term);

?>

<section class="hero" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__overlay"></div>
	<div class="hero__link--offset">
		<a href="">Find more workgroups</a>
	</div>

	<div class="info-block info-block--tablet">
		<div class="info-block__title">
			ANSG
		</div>
	</div>
</section>

<section>
	<div class="container container--flex-start">

		<aside class="aside aside--pulled-up-default">
			<?php include('inc/info-block.php') ?>			
			<?php include('inc/event-listing.php') ?>			
		</aside>

		<div class="content">
			<div class="category-label category-label--b">Breastfeeding</div>
			<h1><?php single_cat_title(); ?></h1>

			<div class="hide-above-ipad info-block--mobile">
				<div class="info-block__toggle">
				  <div class="info-block__open is-visible">Show Contact Information <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-dark-down.svg" alt=""></div>
				  <div class="info-block__close">Hide Contact Information <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-dark-up.svg" alt=""></div>
				</div>
				<?php include('inc/info-block.php') ?>
			</div>

			<p class="intro">
				<?php echo $intro; ?>
			</p>
			<p>
				<?php echo $intro_secondary; ?>
			</p>

			<h2>Latest Updates</h2>

			<div class="grid grid--padding-left half-col-block col-desktop-switch">
				
				<?php
          $args = array(
            'post_type'   => 'news',
           );
           
          $news = new WP_Query( $args );
            if( $news->have_posts() ) :
          ?>
            
            <?php
              while( $news->have_posts() ) :
                $news->the_post();
                ?>
                  <div class="grid__col">
                    <div class="card card--post">
										  <div class="card__date">
										    <?php the_date(); ?>
										  </div>
										  <div class="card__title">
										    <h3><?php the_title(); ?></h3>
										  </div>
										  <div class="card__content">
										    <div class="card__description">
										      <?php the_field('brief_description'); ?>
										    </div>
										    <div class="card__link">
										      <a href="<?php echo the_permalink(); ?>">Continue Reading</a>
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
				<a href="">View all updates</a>
			</div>

			<h2>Resources</h2>

			<div class="grid grid--padding-left half-col-block">
				<div class="grid__col">
					<?php include('inc/card-resource.php') ?>
				</div>
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
				<a href="">View all resources</a>
			</div>

			<h2>Partners</h2>
			<p>Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus, vitae ullamcorper metus. Sed sollicitudin ipsum quis nunc sollicitudin ultrices. Donec euismod scelerisque ligula. Maecenas eu varius risus, eu aliquet arcu. Curabitur fermentum suscip.</p>

			<div class="hide-above-ipad">
			  <?php include('inc/event-listing.php') ?>			
			</div>

		</div>
		
	</div>
</section>

<?php get_footer(); ?>