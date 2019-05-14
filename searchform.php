<section class="section-search">
  <div class="row section-search__row">
    <div class="col-lg-6 section-search__col">
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6 section-search__col section-search__col-searchBlock">
      <form role="search" method="get" class="searchForm" action="<?php echo home_url('/'); ?>">
        <div class="searchForm__inputContainer">
          <input type="submit" class="searchForm__searchIcon searchIcon" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
          <input type="search" class="searchForm__inputSearch inputSearch" placeholder="<?php echo esc_attr_x('Search', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search', 'label') ?>" />
          <span class="searchForm__closeIcon closeIcon"></span><!-- /.searchForm__closeIcon -->
        </div><!-- /.searchForm__inputContainer -->
      </form><!-- /.searchForm -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</section><!-- /.section-search -->