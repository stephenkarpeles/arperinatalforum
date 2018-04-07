<?php include('inc/header.php') ?>

<section class="hero" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__overlay"></div>
</section>

<section class="quarter-col-block">
	<div class="container">
		<div class="context-heading context-heading--b">
			Search Results For:
		</div>
		<h1 class="padding-top">"Perinatal"</h1>
		<h2>Pages</h2>

		<div class="grid">
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-page.php') ?>
			</div>
		</div>

	</div>
</section>

<section class="no-padding-top quarter-col-block">
	<div class="container">
		<h2>News</h2>

		<div class="grid">
			<div class="grid__col">
				<?php include('inc/card-post.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-post.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-post.php') ?>
			</div>			
		</div>

	</div>
</section>


<section class="no-padding-top quarter-col-block">
	<div class="container">
		<h2>Events</h2>

		<div class="grid">
			<div class="grid__col">
				<?php include('inc/card-event.php') ?>
			</div>			
		</div>
		
	</div>
</section>

<section class="no-padding-top quarter-col-block">
	<div class="container">
		<h2>Resources</h2>

		<div class="grid">
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
		
	</div>
</section>

<?php get_footer(); ?>