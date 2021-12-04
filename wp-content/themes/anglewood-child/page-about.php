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
                <p class="intro-p">Established in 2016 by owner Alex Oslopov, Anglewood Furniture grew from its humble beginning into a world-renowned business rooted in quality craftsmanship and innovative design. What is now the largest shop of its kind in Toronto, Anglewood is recognized for its high-end, custom-built live edge wood and epoxy tables. Our 11,000SF warehouse in Toronto has its own woodshop, metal fabrication equipment and a 6,000 board foot kiln, allowing the team to design and build tables entirely in-house. This keeps costs low and selection of locally-sourced slabs consistently high. We pride ourselves in our huge selection of Canadian wood offerings, as we do experimenting with new designs, materials, and complex, creative solutions for our wonderful customer base.</p>
            </div>
        </div>
    </div>
</section>  

 
<section class="timeline-wrap sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div id="timelinepin">
                    <h2 class="mt-3">Our History</h2>
                    <p>Our showroom wasn’t always this mighty. Debuting as a one-man show in the owner’s garage to an impressive 11,000SF warehouse with a dedicated, full-time staff, Anglewood was born with a desire to emphasize wood’s authenticity and history. Each of our pieces is built on a solid foundation of artistry and craftsmanship by our specialized team right here in Toronto, using quality materials, local wood, and industry-leading stains, finishes and epoxy resins. We hold ourselves to incredibly high standards and deliver beautifully hand-crafted, long-lasting and functional pieces for the home. Check out some of our exciting milestones over the years.</p>
                </div>
            </div>


            <div class="col-lg-7 mx-auto">
                
                <!-- Timeline -->
                <ul class="timeline" id="timeline">
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>2016</span>
                        <p class="text-small mt-2 font-weight-light">After years of trial and error and a whole lot of passion for woodworking, Anglewood was born. Starting from a modest, garage-run shop, the company started off with just a few custom projects. It wasn’t long before our custom pieces gained traction.</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>20xx</span>
                        <p class="text-small mt-2 font-weight-light">The year we built and delivered our <i>thousandth</i> custom table… And the best part? No two were alike! That’s the beauty of working with wood slabs. With incredible, natural grain variations, unique epoxy applications, and custom bases, each project excites us just as much as the one before.</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>20xx</span>
                        <p class="text-small mt-2 font-weight-light">Our epoxy work gains international traction. Now with over 10,000 followers (and growing!) on social media, our custom epoxy work turns heads around the world. Luckily, the global recognition didn’t get to our heads!</p>
                    </li>
                    <li class="timeline-item rounded ml-3 p-4 shadow">
                        <div class="timeline-arrow"></div>
                        <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>2021</span>
                        <p class="text-small mt-2 font-weight-light">The Anglewood team grows to 10 full-time employees. We’re proud to say the same team has stuck around over the years and now feels a lot like family.</p>
                    </li>
                </ul><!-- End -->

            </div>

        </div>
    </div>
</section>


<section class="founder-sec sec-pad-lg">
    <div class="container">
<!--
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-5">The Founder</h2>
            </div>
        </div>
-->
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="http://placehold.it/500x500" class="headshot">
                </div>
            </div>
            <div class="col-md-8">
                <div class="flex-height">
                    <h3>Alex Oslopov</h3>
                    <h4>Founder</h4>
                    <p>Of all the natural materials he has worked with, wood became an instant favourite for shop owner Alex. After years of amateur woodworking experience in his garage, the craft kept drawing him in again and again, and it wasn’t long before he grew inspired by the history behind each slab. Over the years, Alex developed a love for transforming new and reclaimed wood into beautiful pieces of furniture. He finally turned his passion into a growing business where he and his team of carpenters and metalworkers refined a process of building high-quality, distinctive wood tables specific to a customer’s unique design.</p>
                </div>
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