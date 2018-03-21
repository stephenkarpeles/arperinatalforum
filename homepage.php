<?php include('inc/header.php') ?>

<section class="hero" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
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
          This news post title cuts off after 50ish characters…
        </div>
      </div>
    </div>

  </div>
</section>

<section>
  <div class="container container--flex">
    <div class="content">
      <p class="intro">The Arkansas Perinatal Forum is an initiative within the Arkansas Department of Health's Family Health Branch that exists to support ongoing activities and workgroups around the state that focus on perinatal health.</p>
      <h2>Our Mission</h2>

      <div class="grid padded-left">
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

    <aside class="aside aside--padding-top">

      <div class="feat-heading">
        <div class="feat-heading__content">
          <span>Upcoming</span>
          <span>Events</span>
        </div>
      </div>  

      <div class="event-listing">

        <div class="event-listing__event">
          <div class="event-listing__date">
            March 16, 2018
          </div>
          <div class="event-listing__title">
            <a href="">2018 Perinatal Conference and Women's Health Update</a>
          </div>
        </div>

        <div class="event-listing__event">
          <div class="event-listing__date">
            April 2, 2018
          </div>
          <div class="event-listing__title">
            <a href="">12th Annual Perinatal &amp; Neonatal Care Seminar</a>
          </div>
        </div>

        <div class="event-listing__more-link">
          <a href="">Find more events</a>
        </div>

      </div>    
    </aside>

  </div><!-- .container -->
</section>

<section class="cards">
  <div class="container">

    <div class="grid">
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

    <div class="grid">
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