<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="post">
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="meta">
        <span>Date: <a class="date" title="" href="#"><?php the_time( __( 'F jS, Y', 'life_is_sweet' ) ); ?></a></span>
        <span>Author: <a class="author" title="" href="#"><?php the_author(); ?></a></span>
        <!-- <span class="categories">Categories: <a class="category" title="" href="#">Category1</a>, <a class="category" href="#">Category2</a></span> -->
        <span class="comments"><a title="" href="#"><?php comments_number('0', '1', '%') ?>&nbsp;&nbsp;&nbsp;</a></span>
      </p>
      <?php if ( has_post_thumbnail() ) { ?>
        <p class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
      <?php } ?>
      <div class="excerpt">
        <?php the_excerpt() ?>
      </div>
      <p class="actions"><a title="" href="<?php the_permalink(); ?>" class="read-more-red">Read more</a></p>
      <!--
        <p class="meta dashed">
          <span class="tags">Tags: <a class="tag" title="" href="#">Tag 1</a>, <a class="category" href="#">Tag 2</a></span>
        </p>
      -->
    </div><!-- end post -->
  <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="pagination index">
      <div class="alignleft">
        <?php previous_posts_link( __( '&larr; Newer entries', 'life_is_sweet' )); ?>
      </div>
      <div class="alignright">
        <?php next_posts_link( __( 'Older entries &rarr;', 'life_is_sweet' )); ?>
      </div>
    </div><!--end pagination-->
  <?php else : ?>
<?php endif; ?>

