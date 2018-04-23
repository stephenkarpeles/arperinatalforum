<div class="mega-menu">

  <div class="mega-menu__highlight-box">
    <span>Find A</span>
    <span>Workgroup</span>
  </div>

  <div class="mega-menu__close">
    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
      <path fill="#A9A9A9" fill-rule="nonzero" d="M5 3.817L1.429.245A.837.837 0 0 0 .245 1.43L3.816 5 .246 8.571a.837.837 0 0 0 1.183 1.184l3.57-3.572 3.572 3.572A.837.837 0 0 0 9.755 8.57L6.183 5l3.572-3.571A.837.837 0 0 0 8.57.245L5 3.817z"/>
    </svg>
    Close Menu
  </div>

  <div class="mega-menu__container">

    <div class="mega-menu__col">
      <div class="context-heading context-heading--b">
        Get Connected
      </div>
      <div class="mega-menu__desc">
        Choose a workgroup to find out what's happening throughout Arkansas.
      </div>
    </div><!-- .mega-menu__col -->

    <div class="mega-menu__col">      
      <ul>
        <?php wp_list_categories( array(
            'orderby' => 'name',
            'include' => array( 4, 18, 1, 19, 22 ),
            'title_li' => '',
            'hide_empty' => false
        ) ); ?> 
      </ul>
    </div>

    <div class="mega-menu__col">
      <ul>
        <?php wp_list_categories( array(
            'orderby' => 'name',
            'include' => array( 20, 17 ),
            'title_li' => '',
            'hide_empty' => false
        ) ); ?> 
      </ul>
    </div>

    <div class="mega-menu__col">
      <ul>
        <?php wp_list_categories( array(
            'orderby' => 'name',
            'include' => array( 99 ),
            'title_li' => '',
            'hide_empty' => false,
            'show_option_none' => ''
        ) ); ?> 
      </ul>
      <a href="<?php echo get_page_link(7); ?>" class="view-all-link">See all workgroups</a>
    </div>

  </div>

</div><!-- .mega-menu -->