<?php
/** Template Name: Home **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

   
<section class="about-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="pb-3">About Us</h1>
                <p class="intro-p">A one stop for all your live edge projects and furniture needs! We specialize in unique, one of a kind pieces, built custom and tailored to perfectly fit your home. We are the largest live edge shop in Toronto, – 10,000 square feet of space, housing our wood shop, metal fabrication, 6,000 board foot kiln and 1000s of slabs to choose from. We mill, and dry all our slabs ourselves – this allows us to keep up large selection of wood and keep prices low. All of our metal work is done on site.</p>
            </div>
        </div>
    </div>
</section>  

 
<section class="timeline-wrap sec-pad-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div id="timelinepin">
                    <h2 class="mt-3">Our History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quis rerum doloribus vero officia quibusdam nemo tempora quasi minus magni maiores sint cum tempore quaerat animi quidem perferendis explicabo, ut!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ad voluptate quis quasi cumque accusamus ullam sit laborum distinctio eligendi voluptatem, repudiandae eius. Dolorum quisquam fugit expedita aspernatur facilis quo, repellendus nisi voluptatum, voluptates ullam repudiandae pariatur consequatur, modi sunt neque illo explicabo optio debitis labore nesciunt exercitationem veniam sed.</p>
                </div>
            </div>


            <div class="col-lg-7 mx-auto">
                
                <!-- Timeline -->
                <ul class="timeline" id="timeline">
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>2016</span>
                        <h2 class="h5 mb-0">Owner &amp; Operator, Alex, starts selling wooden furniture from his garage</h2>
                        <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>20xx</span>
                        <h2 class="h5 mb-0">Alex needs more space, opens warehouse and showroom in Toronto</h2>
                        <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper.</p>
                        <p class="text-small mt-2 font-weight-light">Libero expedita explicabo eius fugiat quia aspernatur autem laudantium error architecto recusandae natus sapiente sit nam eaque, consectetur porro molestiae ipsam! Deleniti.</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>20xx</span>
                        <h2 class="h5 mb-0">First 3 employees are hired, creating a functioning team</h2>
                        <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>2021</span>
                        <h2 class="h5 mb-0">1000th table sold, team grows to 10</h2>
                        <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        <p class="text-small mt-2 font-weight-light">Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit natus! Eum corporis illum nihil officiis tempore. Excepturi illo natus libero sit doloremque, laborum molestias rerum pariatur quam ipsam necessitatibus incidunt, explicabo.</p>
                    </li>
                </ul><!-- End -->

            </div>

        </div>
    </div>
</section>



<section class="team-sec sec-pad-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-5">Meet the Team</h2>
            </div>
        </div>
        <div class="row">
           <?php for ($i = 1; $i <= 12; $i++) { ?>
            <div class="col-md-3">
                <div class="team-member">
                    <img src="http://placehold.it/500x500" class="headshot">
                    <h3>Alex Oslopov</h3>
                    <h4>Founder</h4>
                    <p class="deets"><span>Years with Anglewood: </span> 5 
                    <br><span>Loves: </span> happy clients 
                    <br><span>Favourite wood: </span> Osange Orange</p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php get_template_part( 'global-templates/cta-light' ); ?>


<?php
get_footer();