<?php
/**
 * The Single template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>

<main id="single-post" class="main">
  <div class="container mainContainer">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
      endwhile;
    else :
      _e('Sorry, no posts matched your criteria.', 'apptoncommerce');
    endif; ?>
    <section class="postSuggestions">
      <div class="postSuggestions__title">
        Suggestions
      </div><!-- /.postSuggestions__title -->
      <div class="postSuggestions__content">
        <a href="#" class="postSuggestions__contentLink navLink">
          <div class="navLink__triangle"></div><!-- /.navLink__triangle -->
          <div class="navLink__text">
            Article name
          </div><!-- /.navLink__text -->
        </a><!-- /.postSuggestions__contentLink -->
        <a href="#" class="postSuggestions__contentLink navLink">
          <div class="navLink__triangle"></div><!-- /.navLink__triangle -->
          <div class="navLink__text">
            Article name
          </div><!-- /.navLink__text -->
        </a><!-- /.postSuggestions__contentLink -->
      </div><!-- /.postSuggestions__content -->
    </section><!-- /.postSuggestions -->
  </div><!-- /.container mainContainer -->
</main><!-- #main -->
<?php
get_footer();
?>