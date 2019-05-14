<?php
/**
 * The Content searchResult template file
 *
 * 
 */
?>

<div class=" searchResult-item">
  <a href="<?php the_permalink(); ?>" class="searchResult-item__a">
    <span class="searchResult-item__aSpan"></span><!-- /.searchResult-item__aSpan -->
    <div class="searchResult-item__aText">
      <?php the_title(); ?>
    </div><!-- /.searchResult-item__aText -->
  </a><!-- /.searchResult-item__a -->
  <div class="searchResult-item__excerpt">
    <?php the_excerpt(); ?>
  </div><!-- /.searchResult-item__excerpt -->
</div><!-- /. searchResult-item -->