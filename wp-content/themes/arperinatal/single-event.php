<?php get_header(); ?>

<section class="hero hero--news-events" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__overlay"></div>
	<div class="hero__link--offset">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>/news-events">Find more events</a>
	</div>
</section>

<section>
	<div class="container container--flex-start">

		<aside class="aside aside--pulled-up-default">

			<div class="post-info post-info--no-image">
				<div class="post-info__img post-info__img--no-image">
					<?php 
						$date = get_field('event_date', false, false);
						$date = new DateTime($date);
					?>
					<span><?php echo $date->format('M'); ?></span>
					<span><?php echo $date->format('j'); ?></span>
				</div>
				<div class="post-info__meta post-info__meta--event">
					<table>
						<tr>
							<td>Date:</td>
							<td><?php the_field('event_date'); ?></td>
						</tr>
						<tr>
							<td>Time:</td>
							<td><?php the_field('event_time'); ?></td>
						</tr>
						<tr>
							<td>Location:</td>
							<td>
								<?php the_field('event_location'); ?>
							</td>
						</tr>
						<tr>
							<td>Cost:</td>
							<td>$<?php the_field('event_cost'); ?></td>
						</tr>
						<tr>
							<td>Register:</td>
							<td>
								<a href="<?php the_field('event_registration_link'); ?>"><?php the_field('event_registration_text'); ?><img class="has-link-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-external-link-dark.svg" alt=""></a>	
							</td>
						</tr>
					</table>
				</div>
			</div>

		</aside>

		<div class="hide-above-ipad">
			<div class="post-info post-info--no-image post-info--date">
				<div class="post-info__img post-info__img--no-image">
					<span>Jun</span>
					<span>01</span>
				</div>
				<div class="post-info__meta post-info__meta--event">
					<table>
						<tr>
							<td>Date:</td>
							<td><?php the_field('event_date'); ?></td>
						</tr>
						<tr>
							<td>Time:</td>
							<td><?php the_field('event_time'); ?></td>
						</tr>
						<tr>
							<td>Location:</td>
							<td>
								<?php the_field('event_location'); ?>
							</td>
						</tr>
						<tr>
							<td>Cost:</td>
							<td>$<?php the_field('event_cost'); ?></td>
						</tr>
						<tr>
							<td>Register:</td>
							<td>
								<a href="<?php the_field('event_registration_link'); ?>"><?php the_field('event_registration_text'); ?><img class="has-link-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-external-link-dark.svg" alt=""></a>	
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="content">
			<?php
				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<div class="category-label category-label--b">' . $tag->name . '</div>'; 
				  }
				}
			?>

			<h1><?php the_title(); ?></h1>

			<?php if( get_field('event_intro') ): ?>
				<p class="intro"><?php the_field('event_intro'); ?></p>
			<?php endif; ?>
			
			<?php the_field('event_description'); ?>

		</div>
		
	</div>
</section>

<?php get_footer(); ?>