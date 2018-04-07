<?php include('inc/header.php') ?>

<section class="hero hero--interior" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
	<div class="hero__overlay"></div>

	 <div class="hero__foreground">
    <div class="hero__subtext">
      Learn More About Us
    </div>
    <div class="hero__title">
      <h1>This is a very brief headline that tells what’s on this page.</h1>
    </div>
  </div>
</section>

<section class="huge-padding-top">
	<div class="container container--flex">
		<div class="content">

			<p class="intro">The Arkansas Perinatal Forum is an initiative within the Arkansas Department of Health’s Family Health Branch that exists to support ongoing activities and workgroups around the state that focus on perinatal health.</p>
			<p>The forum is led by Bradley Planey, Family Health Branch Chief and state Maternal and Child Health Director, and is managed by Erin Gildner. Staff is minimal. We exist to support what’s already going on in the state, and provide a forum that encourages groups to collaborate, and share information, data, and resources.</p>

			<h2>Our Mission:</h2>
			<p>Our mission is to optimize perinatal care and health outcomes for women and infants in Arkansas, by engaging key perinatal stakeholders in a forum that supports the use of data-driven, evidence-based, quality improvement initiatives within the community and health care system.</p>

			<h2>Our Goals:</h2>
			<ul>
				<li>To create a voluntary network of care providers, community stakeholders, and advocates to improve perinatal and maternal health outcomes for women and infants in Arkansas by supporting the advancement of evidence-based practices and processes.</li>
				<li>Establish a forum website to share data, reports, events, and other valuable information.</li>
				<li>Foster and encourage state-wide continuous quality improvement initiatives to reduce mortality and morbidity in infants and new mothers.</li>
				<li>To search for synergies between groups; this will enable us to accomplish more together by combining resources and avoiding duplication of effort.</li>
				<li>Promote and support system changes by provider organizations to increase use of evidence-based clinical practices for obstetric and NICU patients.</li>
				<li>Bring together workgroups to focus on specific infant and mother health issues:
					<ul>
						<li>Newborn Screening - (existing)</li>
						<li>Perinatal/NICU Regionalization - (existing)</li>
						<li>Breastfeeding - (existing)</li>
						<li>Safe Sleep - (existing)</li>
						<li>Pre and Early Term Delivery - (existing)</li>
						<li>Hospital Policy and Practice - (existing)</li>
						<li>Infant and Child Death Review (existing)</li>
						<li>Fetal Alcohol Syndrome - (existing)</li>
						<li>Zika (existing)</li>
						<li>Maternal Mortality - (to be added)</li>
						<li>Pre and Inter-Conception Care - (to be added)</li>
						<li>Neonatal Abstinence Syndrome - (to be added)</li>
						<li>Health Equity (to be added)</li>
	        </ul>
	      </li>
			</ul>

			<h2>Our Objectives</h2>

			<ul>
				<li>Identify care processes that need to be improved</li>
				<li>Identify current improvement initiatives</li>
				<li>Identify and promote potential collaboration opportunities between stakeholders</li>
				<li>Identify resources to help improve infant mortality and morbidity rates, maternal mortality</li> and morbidity rates, and preterm birth rates in Arkansas</li>
				<li>Determine what technical assistance is needed</li>
			</ul>

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
          <span>Meet the</span>
          <span>APF Team</span>
        </div>
      </div>
    </div>

  </div>
</section>

<section>
	<div class="container">
		<div class="content">
			<p class="intro">Our team is awesome. Nam porttitor bland itsetam accumsan. Ut vel dictum sem, a pretium dui.</p>
			<p>Nam porttitor blandit accumsan. Ut vel dictum sem, a pretium dui. In malesuada enim in dolor euismod, id commodo mi consectetur. Curabitur at vestibulum nisi. Nullam vehicula nisi velit. Mauris turpis nisl, molestie ut ipsum et, suscipit vehicula odio. Vestibulum interdum vestibulum felis ac molestie. Praesent alique.</p>
		</div>
	</div>
</section>

<section class="no-padding-top">
	<div class="container">
		<div class="content">

			<div class="grid col-desktop-switch">
				<div class="grid__col">
			    <?php include('inc/card-bio.php') ?>
			  </div>
			  <div class="grid__col">
			    <?php include('inc/card-bio.php') ?>
			  </div>
			</div>

			<div class="grid col-desktop-switch">
				<div class="grid__col">
			    <?php include('inc/card-bio.php') ?>
			  </div>
			  <div class="grid__col">
			    <?php include('inc/card-bio.php') ?>
			  </div>
			</div>

    </div>
	</div>
</section>		

<?php get_footer(); ?>