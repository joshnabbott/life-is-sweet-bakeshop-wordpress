<?php get_header(); ?>

<div id="intro">
  <div class="wrap">
    <div class="c-8">
      <h1>Our Story</h1>
      <p class="breadcrumbs">You are here: <a href="home.html">Home</a> &raquo; <strong>About</strong></p>
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
    <div class="c-8">
      <div class="page full post">
        <?php the_post(); ?>
        <?php if ( has_post_thumbnail() ) { ?>
          <p class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
        <?php } ?>
        <?php the_content(); ?>
      </div><!--  end entry -->
    </div>

    <div class="c-4">
      <?php get_sidebar(); ?>
    </div>
  </div><!-- end wrap -->
</div><!-- end content -->

<?php get_footer(); ?>

