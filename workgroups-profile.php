<?php include('inc/header.php') ?>

<section class="hero" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__link--offset">
		<a href="">Find more workgroups</a>
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
			<h1>Arkansas Newborn Screening Group</h1>

			<p class="intro">This is a very brief description of who this org is/what they do. This block should be no more than 200 characters. This isn’t an exhaustive description — just a quick way to get a sense of their purpose.</p>
			<p>For chatty organizations, this block is where they can go into greater detail about their org. I still wouldn’t go crazy with copy, but it does offer some additional space to talk about who they are. Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia. Vivamus facilisis dolor et massa placerat, at vestib.</p>

			<h2>Latest Updates</h2>

			<div class="grid grid--padding-left">
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
				<a href="">View all updates</a>
			</div>

			<h2>Resources</h2>

			<div class="grid grid--padding-left">
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

		</div>
		
	</div>
</section>



<?php include('inc/footer.php') ?>