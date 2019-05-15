<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();

while (have_posts()) :
  the_post();
  $postID = get_the_ID();
endwhile;
$post = get_post($postID);
?>

<main <?php echo 'id="post-id-' .  $postID  . '"' ?> class="main">
  <div class="container mainContainer">
    <?php if (have_posts()) :

      get_search_form($echo); ?>

      <section class="shortHeader">
        <div class="shortHeader__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/uppsellSm.svg" alt="">
        </div><!-- /.shortHeader__icon -->
        <div class="shortHeader__text">
          Appton Upsell help center
        </div><!-- /.shortHeader__text -->
      </section><!-- /.shortHeader -->
      <section class="searchResult px-4">
        <div class="container searchResult__container p-5">

          <?php
          // Start the Loop.
          while (have_posts()) :
            the_post();
            /*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
            get_template_part('content-templates/content', 'searchResult');

          endwhile;
          // Previous/next post navigation.
          // twentyfourteen_paging_nav();
          ?>
          <div class="searchResult-loadMore">
            <a href="#" class="searchResult-loadMore__link">
              Load more results
            </a><!-- /.searchResult-loadMore__link -->
          </div><!-- /.searchResult-loadMore -->
        </div><!-- /.container searchResult__container -->
      </section><!-- /.searchResult -->
    <?php

  else :
    // If no content, include the "No posts found" template.
    // get_template_part('content', 'none');

    get_template_part('content-templates/content', 'none');
  endif;
  ?>
  </div><!-- /.container mainContainer -->
</main><!-- #main -->
<?php
get_footer();
?>