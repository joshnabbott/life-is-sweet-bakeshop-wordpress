<?php get_header(); ?>

    <section id="content-primary" class="row-fluid">
      <div class="span2">
        <?php get_sidebar(); ?>
      </div>

      <div class="span10">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h2><?php the_title(); ?></h2>
              <div><?php printf( __( 'by %s on', 'life_is_sweet' ), get_the_author() ); ?> <?php the_date(); ?></div>
              <div>
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class="thumbnail pull-left">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php } ?>
                <?php the_content(); ?>
                <?php edit_post_link( __( 'Edit this', 'life_is_sweet' ), '<p>', '</p>' ); ?>
                <?php wp_link_pages(); ?>
              </div><!--end entry-->
              <div class="post-footer clear">
                <div class="tags">
                  <?php the_tags( __( 'Tags: ', 'life_is_sweet' ), ', ', '' ); ?>
                </div>
                <div class="cats">
                  <?php printf( __( 'From: %s', 'life_is_sweet' ), get_the_category_list( ', ' ) ); ?>
                </div>
              </div><!--end post footer-->
            </div><!--end post-->
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
          <?php comments_template( '', true ); ?>
        <?php endif; ?>
        <?php the_post(); ?>
      </div>
    </section>

