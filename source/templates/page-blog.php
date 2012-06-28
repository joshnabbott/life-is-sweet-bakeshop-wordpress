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
        <li><a class="fb" href="http://www.facebook.com/LifeIsSweetBakeshop"></a></li>
      </ul>
    </div>
  </div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">
  <div class="wrap">
    <div class="c-8 divider">
      <div class="post-list">
        <?php get_template_part('loop'); ?>
        <!--
        <div class="pagination">
          <ul>
            <li><a href="#" class="previous">Previous</a></li>
            <li><a href="#" class="current">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" class="next">Next</a></li>
          </ul>
        </div>
        -->
      </div><!-- end post-list -->
    </div>

    <?php get_sidebar(); ?>
  </div><!-- end wrap -->
</div><!-- end content -->

<?php get_footer(); ?>

