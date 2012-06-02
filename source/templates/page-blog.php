<?php get_header(); ?>

    <section id="content-primary" class="row-fluid">
      <div class="span2">
        <?php get_sidebar(); ?>
      </div>
      <div class="span10">
        hi
        <?php get_template_part( 'loop' ); ?>
      </div>
    </section>

<?php get_footer(); ?>

