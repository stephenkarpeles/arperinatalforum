<?php include('inc/header.php') ?>

<section class="hero hero--interior hero--news-events" style="background: url('img/apf_home-header.jpg') no-repeat; background-size: cover; background-position: center center;">
  <div class="hero__overlay"></div>
</section>

<section class="no-padding">
  <div class="container">

    <div class="feat-news-block">
      <div class="context-heading context-heading--d">
        Featured News
      </div>
      <div class="feat-news-block__img">
        <img src="img/family_baby.jpg" alt="">
      </div>
      <div class="feat-news-block__row">
        <div class="feat-news-block__post">
          <div class="feat-news-block__date">
            March 16,2018
          </div>
          <div class="feat-news-block__title">
            <a href="">Brain Imaging Protocol Identifies Delays in Premature Infants</a>
          </div>
          <div class="feat-news-block__link is-hidden-desktop-old-school">
            <a href="">Read More</a>
          </div>
        </div> 
        <div class="feat-news-block__content">
          <div class="feat-news-block__excerpt">
            Until recently, predicting the severity of cognitive, motor and behavioral deficits in infants bo…
          </div>
          <div class="feat-news-block__link">
            <a href="">Read More</a>
          </div>
        </div>        
        <div class="feat-news-block__event">
          <div class="feat-news-block__event-heading">
            <span>Featured</span> 
            <span>Event</span>
          </div>
          <div class="feat-news-block__event-content">
            <div class="feat-news-block__event-info">
              <div>March 16, 2018</div>
              <div>11AM - 4PM</div>
              <div>
                Statehouse Convention Center<br>
                Little Rock, AR
              </div>
            </div>
            <div class="feat-news-block__event-title">
              <a href="">2018 Perinatal Conference and Women's Health Update</a>
            </div>

          </div>
        </div>
      </div>
    </div><!-- .feat-news-block -->

  </div>
</section>

<section class="no-padding-bottom"> 
  <div class="container--max container--flex container--flex-start">

    <div class="feat-heading__wrap hide-below-ipad">
      <div class="feat-heading__img">
        <img src="img/baby_sleep.jpg" alt="">
      </div>
      <div class="feat-heading feat-heading--alt">
        <div class="feat-heading__content">
          <span>What's</span>
          <span>Happening</span>
        </div>
      </div>
    </div>    

    <?php include('inc/filter.php') ?>
    <?php include('inc/filter-alt.php') ?>

  </div>
</section>

<section class="cards">
  <div class="container">


      <div class="grid">
        <div class="grid__col">
          <?php include('inc/card-event.php') ?>
        </div>

        <div class="grid__col">
          <?php include('inc/card-event.php') ?>
        </div>

        <div class="grid__col">            
          <?php include('inc/card-event.php') ?>
        </div>

        <div class="grid__col">
          <?php include('inc/card-event.php') ?>
        </div>
      </div><!-- .grid -->

      <div class="view-all-block">
        <a href="">Show more events</a>
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
      </div><!-- .grid -->

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
      </div><!-- .grid -->

      <div class="view-all-block">
        <a href="">Show more news</a>
      </div>

    </div>

  </div>
</section>

<?php include('inc/footer.php') ?>