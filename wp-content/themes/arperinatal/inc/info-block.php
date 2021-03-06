<div class="info-block">
	<div class="info-block__title">
		<?php echo $abbreviation; ?>
	</div>
	<div class="info-block__content">
		
		<?php if( get_field('address') ): ?>
			<div>
				<?php echo $address; ?>
			</div>
    <?php endif; ?>

    <?php if( get_field('phone_number') ): ?>
			<div>
				<?php echo $phone_number; ?>
			</div>
		<?php endif; ?>

		<?php if( get_field('email_address') ): ?>
			<div>
				<a href="mailto:<?php echo $email_address; ?>">Email Us</a> 
			</div>
		<?php endif ?>

		<?php if( get_field('website_address') ): ?>
			<div>
				<a href="<?php echo $website_address; ?>">Website<img class="has-link-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-external-link-dark.svg" alt=""></a>			
			</div>
		<?php endif ?>

		<?php if( get_field('facebook_url') ): ?>
			<div>
				<a href="<?php echo $facebook_url; ?>">Facebook<img class="has-link-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-external-link-dark.svg" alt=""></a>			
			</div>
		<?php endif ?>

		<?php if( get_field('twitter_url') ): ?>
			<div>
				<a href="<?php echo $twitter_url; ?>">Twitter<img class="has-link-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-external-link-dark.svg" alt=""></a>			
			</div>
		<?php endif ?>

		<!-- Primary Contact ACF "Loop" -->
		<?php if( have_rows('primary_contacts') ): ?>

			<h2>Primary Contact</h2>

			<?php while( have_rows('primary_contacts') ): the_row();

				// vars
				$name = get_sub_field('name');
			?>

				<div class="name">
					<?php echo $name; ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</div>