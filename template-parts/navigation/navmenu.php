<nav id="nav-container">
  <div class="logo">
    <?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
      } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
      }
    ?>
  </div>
  <div class="navigation">
    <?php
        wp_nav_menu( array(
          'theme_location' => 'my-custom-menu',
          'container_class' => 'custom-menu-class' 
        ));
    ?>
  </div>
  <div class="search-nav">
    <?php 
      get_search_form();
    ?>
  </div>
</nav>