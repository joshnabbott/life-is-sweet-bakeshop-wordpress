<?php get_header(); ?>

<div id="content" class="home">
  <div id="slider">
    <div class="wrap">
      <div class="c-12">
        <div class="logo">
          <img src="<?php bloginfo('template_url'); ?>/images/logo-big.png" alt="Life is Sweet Bake Shop" width="431" height="341" />
        </div>
      </div><!-- end wrap -->
    </div><!-- end slider -->

    <div id="menu-categories" class="background">
      <div class="wrap">
        <div id="menu-slider">
          <ul>
            <li class="c-3">
              <p class="meta"><a href="#" title="" class="category">Breakfast</a></p>
              <h3 class="title"><a href="">Holiday Casseroles 1</a></h3>
              <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/menu-4col-195x114.jpg" width="195" height="114" alt="" title="" /></p>
              <div class="excerpt">
                <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. </p>
              </div>
              <p class="actions"><a class="read-more-red" href="" title="">Read more</a></p>
            </li>
            <li class="c-3">
              <p class="meta"><a href="#" title="" class="category">Breakfast</a></p>
              <h3 class="title"><a href="">Holiday Casseroles 1</a></h3>
              <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/menu-4col-195x114.jpg" width="195" height="114" alt="" title="" /></p>
              <div class="excerpt">
                <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. </p>
              </div>
              <p class="actions"><a class="read-more-red" href="" title="">Read more</a></p>
            </li>
            <li class="c-3">
              <p class="meta"><a href="#" title="" class="category">Breakfast</a></p>
              <h3 class="title"><a href="">Holiday Casseroles 1</a></h3>
              <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/menu-4col-195x114.jpg" width="195" height="114" alt="" title="" /></p>
              <div class="excerpt">
                <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. </p>
              </div>
              <p class="actions"><a class="read-more-red" href="" title="">Read more</a></p>
            </li>
          </ul>
          <div id="prev-menu-slider"></div>
          <div id="next-menu-slider"></div>
        </div><!-- end menu-slider -->
      </div><!-- end wrap -->
    </div><!-- end menu-categories -->

    <div id="sub-content">
      <div class="wrap">
        <!-- <div class="c-4">
          <div class="widget widget-today-special">
            <h3 class="widget-title">This Week Special</h3>
            <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/thumb-specials-142x142.jpg" width="142" height="142" alt="" /></p>
            <h2 class="title"><a href="" title="">Easy Cheesy Touchdown Bean</a></h2>
            <div class="excerpt">
              <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. </p>
            </div>
            <p class="actions"><a class="read-more-red" href="" title="">Read more</a></p>
          </div>
        </div> -->

        <div class="c-4">
          <div>
            <?php the_post(); ?>
            <?php the_content(); ?>
          </div>
        </div>

        <div class="c-8">
          <div class="widget widget-news-events">
            <h3 class="widget-title">Recent blog posts</h3>
            <ul class="recent-posts">
              <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=3');
                while($recentPosts->have_posts()):
                $recentPosts->the_post();
              ?>
                <li>
                  <?php if (has_post_thumbnail()) { ?>
                    <div class="post-thumbnail">
                      <a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('recent-post-thumbnail'); ?></a>
                    </div>
                  <?php } ?>
                  <h3 class="title"><a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                  <div class="excerpt">
                    <?php echo the_excerpt(); ?>
                  </div>
                </li>
              <?php
                endwhile;
                wp_reset_query();
              ?>
            </ul>
          </div><!-- end widget-news-events-->
        </div>

      </div><!-- end wrap -->
    </div> <!-- end sub-content  -->
</div><!-- end content -->

<?php get_footer(); ?>
