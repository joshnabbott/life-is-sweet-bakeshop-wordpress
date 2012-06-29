<div class="c-4 sidebar">
  <div class="widget widget-recent">
    <h3 class="widget-title">Recent Posts</h3>
    <?php $recent_posts = wp_get_recent_posts(); ?>
    <ul class="arrows">
      <?php
        foreach($recent_posts as $post) {
          echo('<li><a href="'. get_permalink($post["ID"]) .'">'. $post['post_title'] .'</a></li>');
        }
      ?>
    </ul>
  </div><!-- end widget-recent -->

  <div class="widget widget-categories">
    <h3 class="widget-title">Blog Categories</h3>
    <?php wp_list_categories(array('hierarchical' => false, 'title_li' => '')); ?>
    <div class="clearfix"></div>
  </div><!-- end widget-categories -->

  <div class="widget widget-archives">
    <h3 class="widget-title">Archives</h3>
    <ul class="arrows">
      <?php wp_get_archives('type=monthly&limit=12'); ?>
    </ul>
  </div><!-- end widget-archives -->

  <div class="widget widget-restaurant-hours">
    <h3 class="widget-title">Restaurant Hours</h3>
    <ul class="restaurant-hours">
      <li><p class="meta">Breakfast</p></li>
      <li>
        <label>Monday - Friday</label>
        <span>11:00 am - 03:00 pm</span>
      </li>
      <li>
        <label>Monday - Friday</label>
        <span>11:00 am - 03:00 pm</span>
      </li>
    </ul>
    <ul class="restaurant-hours">
      <li><p class="meta">Lunch</p></li>
      <li>
        <label>Monday - Friday</label>
        <span>11:00 am - 03:00 pm</span>
      </li>
      <li>
        <label>Monday - Friday</label>
        <span>11:00 am - 03:00 pm</span>
      </li>
    </ul>
  </div><!-- end widget-restaurant-hours -->

  <div class="widget widget-twitter">
    <h3 class="widget-title">Twitter Updates</h3>
    <ul class="twitter-feed">
      <li class="tweet-row">
        <span class="profile"><a href="">Barbedo</a></span>
        <span class="content">Scary! <a class="replay" href="">RT @karasw:</a> $10/day in-room internet at Four Seasons Santa Barbara. Boo.</span>
        <span class="time"><a href="">about 5 hours ago</a></span>
      </li>
      <li class="tweet-row">
        <span class="profile"><a href="">Barbedo</a></span>
        <span class="content">Scary! <a class="replay" href="">RT @karasw:</a> $10/day in-room internet at Four Seasons Santa Barbara. Boo.</span>
        <span class="time"><a href="">about 5 hours ago</a></span>
      </li>
      <li class="tweet-row">
        <span class="profile"><a href="">Barbedo</a></span>
        <span class="content">Scary! <a class="replay" href="">RT @karasw:</a> $10/day in-room internet at Four Seasons Santa Barbara. Boo.</span>
        <span class="time"><a href="">about 5 hours ago</a></span>
      </li>
    </ul>
  </div><!-- end widget-news-events-->
</div>

