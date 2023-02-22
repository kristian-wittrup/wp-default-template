<?php
/**
 * Singple Page template
 */
get_header();
?>
<!-- #primary.content-area -->
<div id="primary" class="content-area">
  <!-- main#main.site-main -->
  <main id="main" class="site-main">
    <?php
      while( have_posts()) :
        the_post();
        //the_title('<h1>','</h1>' );
        //the_content();
        get_template_part( 'template-parts/post/content', get_post_format() );
      endwhile;

      // if comments are open then we show the comments template
      if( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
    
  </main>
</div>