<?php
/** Template Name: Home **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

   
<section class="contact-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ready to talk wood?</h1>
                <p class="intro-p">Our team looks forward to hearing from you.</p>
            </div>
        </div>
    </div>
</section>  
 
<section class="contact-sec sec-pad">
    <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <?php get_template_part( 'global-templates/map-contact' ); ?>
              </div>
              <div class="col-lg-3">
                  <div class="contact-info" data-aos="fade-left" data-aos-delay="300">
                    <div class="group">
                      <p>Phone: <span><a href="tel:+16477179792">(647) 717-9792</a></span></p>
                    </div>
                    <div class="group">
                      <p>Email: <span><a href="mailto:contact@anglewood.ca">contact@anglewood.ca</a></span></p>
                    </div>
                    <div class="group">
                      <p>Address: <span>810 Flint Rd. <br>North York, ON <br>M3J 2J5</span></p>
                    </div>
                    <div class="group">
                      <p>Business Hours: <span>Mon: CLOSED<br>Tues-Fri: 7:00am-4:30pm<br>Sat-Sun: 10:00am-3:00pm</span></p>
                    </div>
                
                  </div>
              </div>
          </div>
    </div>
</section>
 


<?php
get_footer();