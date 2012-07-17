<?php get_header(); ?>

<div id="content" class="home">
  <div id="slider">
    <div class="wrap">
      <div class="c-4">
        <div id="small-slider">
          <ul>
            <li>
              <h4>Vanilla Bean Cupcakes</h4>
            </li>
            <li>
              <h4>Cinnamon Roll Cupcakes</h4>
            </li>
            <li>
              <h4>Donuts</h4>
            </li>
            <li>
              <h4>"Fauxstess" Cupcakes</h4>
            </li>
          </ul>
        </div>
      </div>

      <div class="c-8">
        <div id="big-slider">
          <div class="mask"></div>
            <ul>
              <li>
                <a href="" title=""><img src="<?php bloginfo('template_url'); ?>/images/home/slideshow-vanilla-cupcakes.jpg" width="511" height="511" alt="Vanilla Cupcakes" title="Vanilla Bean Cupcakes" /></a>
              </li>
              <li>
                <a href="" title=""><img src="<?php bloginfo('template_url'); ?>/images/home/slideshow-cinnamon-roll-cupcakes.jpg" width="511" height="341" alt="Cinnamon Roll Cupcakes" title="Cinnamon Roll Cupcakes" /></a>
              </li>
              <li>
                <a href="" title=""><img src="<?php bloginfo('template_url'); ?>/images/home/slideshow-donuts.jpg" width="511" height="341" alt="Donuts" title="Donuts" /></a>
              </li>
              <li>
                <a href="" title=""><img src="<?php bloginfo('template_url'); ?>/images/home/slideshow-fauxstess-cupcakes.jpg" width="511" height="341" alt="\"Fauxstess\" Cupcakes" title="\"Fauxstess\" Cupcakes" /></a>
              </li>
            </ul>
            <div id="prev"></div>
            <div id="next"></div>
          </div>
        </div>
      </div><!-- end wrap -->
    </div><!-- end slider -->

    <div id="menu-categories" class="background">
      <div class="wrap">
        <div id="menu-slider">
          <!-- <ul>
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
          <div id="next-menu-slider"></div> -->
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
            <ul>
              <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=3');
                while($recentPosts->have_posts()):
                $recentPosts->the_post();
              ?>
                <li>
                  <h3 class="title"><a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                  <?php if (has_post_thumbnail()) { ?>
                    <p class="image" style="float: left; margin-right: 9px;"><a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('recent-post-thumbnail'); ?></a></p>
                  <?php } ?>
                  <div>
                    <div class="excerpt">
                      <p><?php echo the_excerpt(); ?> <a class="read-more-red" href="<?php echo the_permalink(); ?>">Read more</a></p>
                    </div>
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
