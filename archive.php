<?php 
/**
 * Template Name: Archive
 */
get_header();
?>

<!-- #primary.content-area -->
<div id="primary" class="content-area">
  <!-- main#main.site-main -->  
  <main id="main" class="site-main">
    <?php 
      if ( have_posts() ) :  
    ?>
    <header class="archive-page-header">
      <?php 
        the_archive_title( '<h1 class="archive-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>');
      ?>
    </header>
    <?php 
      while ( have_posts () ) :
        the_post();
        get_template_part('template-parts/post/content');
      endwhile;

      the_posts_pagination( 
        array(
          'prev_text' => esc_html__('Prev'),
          'next_text' => esc_html__('Next')
        )
        );
      else :
        get_template_part('template-parts/post/content', 'none');  
    ?>
    <?php endif; ?> 
  </main>
</div>