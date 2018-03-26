<?php include('inc/header.php') ?>

<section class="hero hero--interior" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
  <div class="hero__overlay"></div>

	 <div class="hero__foreground">
    <div class="hero__subtext">
      Get Equipped
    </div>
    <div class="hero__title">
      <h1>This is a very brief headline that tells what’s on this page.</h1>
    </div>
  </div>
</section>

<section>
	<div class="container container--flex">
		<div class="content">

			<p class="intro">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodales nisi, quis iaculis nulla iaculis vitae. Donec sagittis faucibus lacus eget blandit. Mauris vitae ultricies metus, at.</p>
			<p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia. Vivamus facilisis dolor et massa placerat, at vestib.</p>			

		</div><!-- .content -->

		<aside class="aside aside--pulled-up">
			<div class="feat-post hero-base__feat-post">
		    <img src="img/family_baby.jpg" alt="">
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
        <img src="img/baby_sleep.jpg" alt="">
      </div>
      <div class="feat-heading feat-heading--alt">
        <div class="feat-heading__content">
          <span>Find</span>
          <span>Resources</span>
        </div>
      </div>

      <?php include('inc/select-block.php') ?>
    </div>
    
  </div>
</section>

<section class="cards">
  <div class="container">

    <div class="resource-group">

      <div class="grid">
        <div class="grid__col">
          <?php include('inc/card-workgroup.php') ?>
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
      </div><!-- .grid -->

      <div class="grid">
        <div class="grid__col grid__col--empty">        
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
      </div><!-- .grid -->

      <div class="grid">
        <div class="grid__col grid__col--empty">        
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
      </div><!-- .grid -->

    </div>

    <div class="resource-group">

      <div class="grid">
        <div class="grid__col">
          <?php include('inc/card-workgroup.php') ?>
        </div>

        <div class="grid__col">
          <?php include('inc/card-resource.php') ?>
        </div>

        <div class="grid__col">            
          <?php include('inc/card-resource.php') ?>
        </div>

        <div class="grid__col grid__col--empty">
        </div>
      </div><!-- .grid -->

    </div>

     <div class="resource-group">

      <div class="grid">
        <div class="grid__col">
          <?php include('inc/card-workgroup.php') ?>
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
      </div><!-- .grid -->

    </div>

  </div>
</section>

<?php include('inc/footer.php') ?>