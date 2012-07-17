<?php get_header(); ?>

<div id="intro">
  <div class="wrap">
    <div class="c-8">
      <h1>Blog Posts</h1>
      <p class="breadcrumbs">You are here: <a href="home.html">Home</a> &raquo; <strong>Blog Posts</strong> </p>
    </div>

    <div class="c-4">
      <ul class="social-bookmarking">
        <li><a class="tw" href="http://twitter.com/lifeissweetoc"></a></li>
        <li><a class="fb" href="http://www.facebook.com/lifeissweetbakeshopoc"></a></li>
      </ul>
    </div>
  </div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">
  <div class="wrap">
    <div class="c-8 divider">
      <div class="post-list">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="post">
              <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="meta">
                <span>Date: <a class="date" title="" href="#">15 Feb 2010</a></span>
                <span>Author: <a class="author" title="" href="#"><?php the_author(); ?></a></span>
                <!-- <span class="categories">Categories: <a class="category" title="" href="#">Category1</a>, <a class="category" href="#">Category2</a></span> -->
                <span class="comments"><a title="" href="#"><?php comments_number('0', '1', '%'); ?>&nbsp;&nbsp;&nbsp;</a></span>
              </p>
              <?php if ( has_post_thumbnail() ) { ?>
                <p class="image"><a href=""><?php the_post_thumbnail(); ?></a></p>
              <?php } ?>
              <?php the_content(); ?>
              <!-- <p class="meta dashed"> -->
              <!--   <span class="tags">Tags: <a class="tag" title="" href="#">Tag 1</a>, <a class="category" href="#">Tag 2</a></span> -->
              <!-- </p> -->
            </div><!-- end post -->
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
          <?php // comments_template('', true) ?>
        <?php endif; ?>
        <?php the_post(); ?>
      </div>
    </div><!-- end post-list -->

    <?php get_sidebar(); ?>
  </div><!-- end wrap -->
</div><!-- end content -->

<?php get_footer(); ?>

