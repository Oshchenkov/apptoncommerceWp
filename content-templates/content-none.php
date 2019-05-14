<?php
/**
 * The Content NONE template file
 *
 * 
 */
get_search_form($echo);
?>


<section class="shortHeader">
  <div class="shortHeader__icon">
    <img src="images/Logo/uppsellSm.svg" alt="">
  </div><!-- /.shortHeader__icon -->
  <div class="shortHeader__text">
    Appton Upsell help center
  </div><!-- /.shortHeader__text -->
</section><!-- /.shortHeader -->
<section class="searchResult px-4">
  <div class="container searchResult__container p-5">
    <div class="searchResult-NoItem">
      <div class="searchResult-NoItem__text">
        <?php _e('Sorry, no results found. We prepared some getting started suggestions.', 'apptoncommerce'); ?>
      </div><!-- /.searchResult-NoItem__text -->
    </div><!-- /.searchResult-NoItem -->
    <div class=" searchResult-item">
      <a href="#" class="searchResult-item__a">
        <span class="searchResult-item__aSpan"></span><!-- /.searchResult-item__aSpan -->
        <div class="searchResult-item__aText">
          Get started
        </div><!-- /.searchResult-item__aText -->
      </a><!-- /.searchResult-item__a -->
      <div class="searchResult-item__excerpt">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Alias praesentium illo placeat pariatur tempora hic quam
        harum! Nihil saepe soluta, tempora quod commodi repellat!
      </div><!-- /.searchResult-item__excerpt -->
    </div><!-- /. searchResult-item -->

  </div><!-- /.container searchResult__container -->
</section><!-- /.searchResult -->