<?php include('inc/header.php') ?>

<section class="hero" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__overlay"></div>
</section>

<section class="quarter-col-block">
	<div class="container">
		<div class="floating-branding">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
		</div>
		<div class="context-heading context-heading--b">
			New Posts For:
		</div>
		<h1 class="padding-top">Arkansas Department of Health</h1>
		<div class="link-styled">
			<a href="">Visit Page</a>
		</div>


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
			<div class="grid__col">
				<?php include('inc/card-post.php') ?>
			</div>
			<div class="grid__col">
				<?php include('inc/card-post.php') ?>
			</div>
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

		<div class="view-all-block">
      <a href="">Show more news</a>
    </div>

	</div>
</section>

<?php get_footer(); ?>