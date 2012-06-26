<?php get_header(); ?>

<div id="intro">
  <div class="wrap">
    <div class="c-8">
      <h1>Contact Us</h1>
      <p class="breadcrumbs">You are here: <a href="home.html">Home</a> &raquo; <strong>Contact us</strong> </p>
    </div>
    <div class="c-4">
      <ul class="social-bookmarking">
        <li><a class="tw" href=""></a></li>
        <li><a class="fb" href=""></a></li>
        <li><a class="in" href=""></a></li>
        <li><a class="rss" href=""></a></li>
      </ul>
    </div>
  </div><!-- end wrap -->
</div><!-- end intro -->

<div id="content">
  <div class="wrap">
    <div class="c-8 divider">
      <div class="entry">
        <p>Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Proin ac odio in urna cursus ultricies. Quisque tincidunt lacus in ante. Donec adipiscing. Curabitur at enim at nulla iaculis feugiat. Ut semper, nisi vel suscipit venenatis, felis diam auctor mi, quis iaculis leo nulla vel sapien. Phasellus blandit nibh vel turpis. Curabitur commodo. </p>

        <form enctype="multipart/form-data" method="post" action="" id="reservationform">
          <div class="send-form">
            <p>
              <label>Party Size:</label>
              <select style="opacity: 0;">
                <option value="option0">Please Select Size</option>
                <option value="option1">1</option>
                <option value="option2">2</option>
                <option value="option3">3</option>
                <option value="option4">4</option>
                <option value="option5">5</option>
                <option value="option6">6</option>
                <option value="option7">7</option>
                <option value="option8">8</option>
                <option value="option9">9</option>
                <option value="option10">10</option>
              </select>
            </p>
            <p>
              <label>Date:</label>
              <input class="u-2" name="name" id="datepicker" />
            </p>
            <p>
              <label>Meal Type:</label>
              <select >
                <option value="option0">Please Select Meal Type</option>
                <option value="option1">Breakfast</option>
                <option value="option2">Lunch</option>
                <option value="option3">Dinner</option>
              </select>
            </p>
            <p>
              <label>Time:</label>
              <input class="u-1" name="name" id="hours" />
              :
              <input class="u-1" name="minutes" id="time" />
            </p>
            <p>
              <label>Name:</label>
              <input class="u-4" name="name" id="name1" />
            </p>
            <p>
              <label>Email:</label>
              <input class="u-4" name="email" id="email1" />
            </p>
            <p>
              <label>Phone:</label>
              <input class="u-4" name="phone" id="phone1" />
            </p>
            <p>
              <label>Notes:</label>
              <textarea class="u-6" name="notes" id="notes1" cols="80" rows="5"></textarea>
              <br/>
            </p>
            <p>
              <input type="submit" name="" class="submit" value="Send this mother!" />
              <input type="reset" name="" class="reset" value="Cancel, start over." />
            </p>
          </div><!--  end book-table-form -->
        </form>
      </div><!--  end entry -->
    </div>
    <?php get_sidebar(); ?>
  </div><!-- end wrap -->
</div><!-- end content -->

<?php get_footer(); ?>

