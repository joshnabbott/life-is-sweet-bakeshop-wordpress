<?php get_header(); ?>

    <section id="content-primary" class="row-fluid">
      <div class="span2">
        <?php get_sidebar(); ?>
      </div>

      <div class="span10">
        <?php the_post(); ?>

        <div id="page-<?php the_ID(); ?>">
          <h2><?php the_title(); ?></h2>

          <div class="row-fluid">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class="thumbnail pull-left">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php } ?>
            <?php the_content(); ?>
          </div>
        </div>
        <?php comments_template( '', true ); ?>
      </div>
    </section>

<?php get_footer(); ?>

