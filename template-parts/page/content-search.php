<?php 
/**
 * The template for displaying search results pages.
 */
get_header( ) ;
?>
<article id="post-<?php the_ID(); ?>">
  <header class="entry-header">
    <?php 
      the_title( 
        sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', 
        esc_url( get_permalink() )),
        '</a></h2>' 
      );
    ?>
  </header>

  <div class="entry-summary">
    <?php the_excerpt() ; ?>
  </div>

  <div class="entry-footer">
    <?php 
      printf('<a href="%s">Read More</a>', esc_url( get_the_permalink()));
    ?>
  </div>

</article>

<?php get_footer(); ?>