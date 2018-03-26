<?php include('inc/header.php') ?>

<section class="hero hero--homepage" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">

  <div class="hero__foreground">
    <div class="hero__subtext">
      Get Connected Arkansas
    </div>
    <div class="hero__title">
      <h1>A network committed to improving perinatal outcomes for women and infants in Arkansas.</h1>
    </div>
    <div class="hero__link">
      <a href="">Get Connected</a>
    </div>
  </div>
</section>

<section class="hero-base no-padding">
  <div class="container--max">
    <div class="hero-base__clock">
      <img src="img/icon-clock.svg" alt="">
    </div>

    <div class="hero-base__title-block">
      <span>Latest</span>
      <span>Workgroup<br>Updates</span>
    </div>

    <div class="hero-base__update-block">
      <div class="col">
        <div class="date">March 16, 2018</div>
        <div class="title"><a href="">Arkansas Newborn Screening Group</a></div>
      </div>
      <div class="col">
        <div class="category context-heading context-heading--c">News</div>
        <div class="excerpt"><a href="">New screening methods go into effect on May 1, 2018</a></div>
      </div>
    </div>

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
        <div class="feat-post__date feat-post__date--secondary">
          March 16, 2018
        </div>
        <div class="feat-post__excerpt feat-post__excerpt--secondary"> 
          <a href="">This news post title cuts off after 50ish characters…</a>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-base__style-block">
  </div>
</section>

<section class="huge-padding-top">
  <div class="container container--flex">
    <div class="content content--home">
      <p class="intro">The Arkansas Perinatal Forum is an initiative within the Arkansas Department of Health's Family Health Branch that exists to support ongoing activities and workgroups around the state that focus on perinatal health.</p>
      <h2>Our Mission</h2>

      <div class="grid half-col-block padded-left">
        <div class="grid__col">
          <p>Our mission is to optimize perinatal care and health outcomes for women and infants in Arkansas, by engaging key perinatal stakeholders in a forum that supports the use of data-driven, evidence-based, quality improvement initiatives within the community and health care system.</p>
        </div>
        <div class="grid__col">
          <p>We work to support what's already going on in the state and provide a forum that encourages groups to collaborate, and share information, data, and resources.</p>
          <div class="cta cta--fancy">
            <a href="#">Learn more</a>
          </div>
        </div>
      </div><!-- .grid -->

      <h2>Funding</h2>

      <div class="media padded-left">
        <img class="media__img media__img--small" src="img/logo.png" alt="">
        <p class="media__body">This project is supported by the <a href="#">Arkansas Department of Health</a> (ADH) through funding from the Health Resources and Services Administration (HRSA) of the U.S. Department of Health and Human Services (HHS), under grant number B04MC30599, Maternal and Child Health Services. This information or content and conclusions are those of the author and should not be construed as the official position or policy of, nor should any endorsements be inferred by the ADH, HRSA, HHS, or the U.S. Government.</p>
      </div>
    </div><!-- .content -->

    <aside class="aside aside--padding-top aside--home">

      <?php include('inc/event-listing.php') ?>   
      
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
          <span>Meet the</span>
          <span>Workgroups</span>
        </div>
      </div>
      <div class="feat-heading__caption">
        <span>We support the tireless work of perinatal groups all across Arkansas.</span>
        <a href="">See all workgroups</a>
      </div>
    </div>

  </div>
</section>

<section class="cards">
  <div class="container">

    <div class="grid third-col-block">
      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">            
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">            
        <?php include('inc/card.php') ?>
      </div>

      <div class="grid__col">
        <?php include('inc/card.php') ?>
      </div>
    </div><!-- .grid -->

  </div>
</section>

<?php include('inc/footer.php') ?>