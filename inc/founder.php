<section id="staff">
  <div class="section_banner_bg"></div>
  <div id="staff_header" class="section_text_header">
    COLLINS KAWERE WAGABA
  </div>
  <div id="staff_main">
    
    <article class="staff_item">
      <div class="wrapper">
        <section class="staff_item_thumb">
          <img src="img/founder.jpg" />
        </section>
        <section class="staff_item_text">
          
          <section class="staff_item_text_header">
            INTRO
          </section>
          <section class="staff_item_text_main">
            <p>Meet the cool guy that creates cool stuff.<br />Coder, Designer and Entrepreneur from Uganda.</p>
          </section>
          
          <section class="staff_item_text_header">
            FACTS
          </section>
          <section class="staff_item_text_main">
            <p>I'm a Christian and, yes, I think am in love with money!</p>
            <p>I majored in Math and Computer Science at Makerere University Kampala.</p>
            <p>I have a liking for Music, Sport, Art, Tech, Photography, Policy, and Adventure.</p>
          </section>
          
          <div class="spacer"></div>
        </section>
        <div class="spacer"></div>
      </div>
    </article>
    
    <article class="staff_item" id="newsletter">
      <div class="wrapper">
        <section class="staff_item_thumb">
          <!--<img src="img/founder.jpg" />-->
        </section>
        <section class="staff_item_text">
          <script>
          function getKey(e){
            var key=e.keyCode;
            if(key==13){
              $("#signup_email").blur();//hide soft-keyboard (mobile keyboard)
            	signUp();
            }
          }
          </script>
          <section class="staff_item_text_header">
            NEWSLETTER
          </section>
          <section class="staff_item_text_main">
            <p>Wanna know what's in my crazy mind? Sign up for my newsletter.</p>
            <div id="signup_main">
              <input type="text" placeholder="Email Address" id="signup_email" onkeydown="getKey(event);" />
              <input type="button" value="Sign Up" id="signup_button" />
            </div>
            <div id="signup_footer">&nbsp;</div><!--Obscured by the mobile keyboard when the Go key is tapped.-->
            <div class="spacer"></div>
          </section>
          
          <div class="spacer"></div>
        </section>
        <div class="spacer"></div>
      </div>
    </article>

    <div class="spacer"></div>
  </div>
  <div class="spacer"></div>
</section>
