    <div id="footer">
      <div class="wrap">
        <div class="c-4">
          <!-- <div class="widget widget-about"> -->
          <!--   <h3 class="widget-title">Chef Mazzareli</h3> -->
          <!--   <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/about-ft-82x82.jpg" width="82" height="82" alt="" /></p> -->
          <!--   <div class="excerpt"> -->
          <!--     <p>Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien. Vivamus convallis rutrum. Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis. ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien. </p> -->
          <!--   </div> -->
          <!--   <p class="actions"><a class="read-more-white" href="" title="">Read more</a></p> -->
          <!-- </div>[> end widget-about <] -->
        </div>
        <div class="c-4">
          <!-- <div class="widget widget-menu-highlights"> -->
          <!--   <h3 class="widget-title">Menu Highlights</h3> -->
          <!--   <ul> -->
          <!--     <li> -->
          <!--       <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/menu-ft-56x56.jpg" width="56" height="56" alt="" /></p> -->
          <!--       <h2 class="widget-title"><a href="" title="">French Wedge</a></h2> -->
          <!--       <div class="excerpt"> -->
          <!--         <p>Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies. </p> -->
          <!--       </div> -->
          <!--     </li> -->
          <!--     <li> -->
          <!--       <p class="image"><img src="<?php bloginfo('template_url'); ?>/images/menu-ft-56x56-1.jpg" width="56" height="56" alt="" /></p> -->
          <!--       <h2 class="widget-title"><a href="" title="">Tarte aux pommes</a></h2> -->
          <!--       <div class="excerpt"> -->
          <!--         <p>Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies. </p> -->
          <!--       </div> -->
          <!--     </li> -->
          <!--     <li> -->
          <!--       <p class="actions"><a class="read-more-white" href="" title="">Look for more</a></p> -->
          <!--     </li> -->
          <!--   </ul> -->
          <!-- </div>[> end widget-menu-highlights <] -->
        </div>

        <div class="c-4">
          <div class="widget widget-contact-us">
            <h3 class="widget-title">Contact Us</h3>
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
                <textarea class="u-3" name="message[body]" rows="2" id="contcat-message"></textarea>
              </p>
              <p>
                <input type="hidden" name="token" value="MDEf5oK71wxtPw==" />
                <input type="hidden" name="redirect_to" value="http://<?php echo($_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); ?>" />
                <input type="hidden" name="message[subject]" value="[Life Is Sweet Bakeshop] - Contact Form" />
                <input type="submit" name="commit" class="submit" value="Contact Us" />
              </p>
            </form>
          </div><!-- end widget-contact-us -->
        </div>
      </div><!-- end wrap -->
    </div><!-- end footer -->
    <div id="subfooter">
      <div class="wrap">
        <div class="c-6">
          <p id="copyright">&copy; 2012 Life is Sweet Bakeshop</p>
        </div>
        <!-- <div class="c-6">
          <ul class="subfooter-menu">
            <li><a href="" title="">Terms &amp; Conditions</a></li>
            <li><a href="" title="">Copyrights</a></li>
            <li><a href="" title="">Site Map</a></li>
          </ul> -->
        </div>
      </div><!-- end wrap -->
    </div><!-- end subfooter -->
  </body>
</html>

