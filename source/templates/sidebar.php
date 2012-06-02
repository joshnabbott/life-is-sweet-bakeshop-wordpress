<section id="sidebar" class="row-fluid">
  <div class="row-fluid">
    <?php
      wp_nav_menu(array(
        'theme_location'  => 'primary-nav',
        'container'       => 'nav',
        'container_class' => 'span12',
        'menu_class'      => 'nav nav-stacked nav-tabs'
      ));
    ?>
  </div>
  <div class="well span12">
    <p>Everything is made with love at:</p>
    <address>
      The Delhi Center<br/>
      505 E. Central Ave.<br/>
      Santa Ana, CA 92707
    </address>
  </div>
</section>

