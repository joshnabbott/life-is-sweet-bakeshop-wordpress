<?php get_header(); ?>

<div id="intro">
  <div class="wrap">
    <div class="c-8">
      <h1>Contact Us</h1>
      <p class="breadcrumbs">You are here: <a href="home.html">Home</a> &raquo; <strong>Contact us</strong> </p>
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
      <div class="entry">
        <p>Whether it's an important event that you need the perfect deserts for, a question you have about our ingredients, recipes, or even a suggestion for making our website better; we want to hear from you! Use the form below to get in touch, and we'll try to respond as quickly as we can.</p>

        <form id="contactform" action="http://lifeissweetbakeshop.mailmanhq.com" method="post">
          <p>
            <label for="contact-name">Your name:</label>
            <input class="u-3" name="message[sender]" id="contact-name" />
          </p>
          <p>
            <label for="contact-email">Your email:</label>
            <input class="u-3" name="message[from]" id="contact-email" />
          </p>
          <p>
            <label for="contact-message">Message:</label>
            <textarea class="u-3" name="message[body]" rows="5" id="contact-message"></textarea>
          </p>
          <p>
            <input type="hidden" name="token" value="MDEf5oK71wxtPw==" />
            <input type="hidden" name="redirect_to" value="http://<?php echo($_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); ?>" />
            <input type="hidden" name="message[subject]" value="[Life Is Sweet Bakeshop] - Contact Form" />
            <input type="submit" name="commit" class="submit" value="Contact Us" />
          </p>
        </form>
        <!-- <form method="post" action="http://lifeissweetbakeshop.mailmanhq.com" id="reservationform"> -->
        <!--   <div class="send-form"> -->
        <!--     <p> -->
        <!--       <label>Party Size:</label> -->
        <!--       <select style="opacity: 0;" name="message[event_party_size]"> -->
        <!--         <option value="">Please Select One...</option> -->
        <!--         <option value="1">1</option> -->
        <!--         <option value="2">2</option> -->
        <!--         <option value="3">3</option> -->
        <!--         <option value="4">4</option> -->
        <!--         <option value="5">5</option> -->
        <!--         <option value="6">6</option> -->
        <!--         <option value="8">7</option> -->
        <!--         <option value="8">8</option> -->
        <!--         <option value="9">9</option> -->
        <!--         <option value="10">10</option> -->
        <!--       </select> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Date:</label> -->
        <!--       <input class="u-2" name="message[event_date]" id="datepicker" /> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Event Type:</label> -->
        <!--       <select name="message[event_type]"> -->
        <!--         <option value="">Please select one...</option> -->
        <!--         <option value="Breakfast">Breakfast</option> -->
        <!--         <option value="Lunch">Lunch</option> -->
        <!--         <option value="Dinner">Dinner</option> -->
        <!--       </select> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Time:</label> -->
        <!--       <input class="u-1" name="name" id="hours" /> -->
        <!--       : -->
        <!--       <input class="u-1" name="minutes" id="time" /> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Name:</label> -->
        <!--       <input class="u-4" name="name" id="name1" /> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Email:</label> -->
        <!--       <input class="u-4" name="email" id="email1" /> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Phone:</label> -->
        <!--       <input class="u-4" name="phone" id="phone1" /> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <label>Notes:</label> -->
        <!--       <textarea class="u-6" name="notes" id="notes1" cols="80" rows="5"></textarea> -->
        <!--       <br/> -->
        <!--     </p> -->
        <!--     <p> -->
        <!--       <input type="hidden" name="token" value="MDEf5oK71wxtPw==" /> -->
        <!--       <input type="hidden" name="redirect_to" value="http://<?php echo($_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); ?>" /> -->
        <!--       <input type="hidden" name="message[subject]" value="[Life Is Sweet Bakeshop] - Inquiry Form" /> -->
        <!--       <input type="submit" name="" class="submit" value="Send!" /> -->
        <!--       <input type="reset" name="" class="reset" value="Cancel, start over." /> -->
        <!--     </p> -->
        <!--   </div>[>  end book-table-form <] -->
        <!-- </form> -->
      </div><!--  end entry -->
    </div>
    <?php get_sidebar(); ?>
  </div><!-- end wrap -->
</div><!-- end content -->

<?php get_footer(); ?>

