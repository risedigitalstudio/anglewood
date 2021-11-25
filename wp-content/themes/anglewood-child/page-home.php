<?php
/** Template Name: Home **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

   
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Luxury, custom tables built uniquely for your home.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatibus laborum, asperiores ex nam reprehenderit!</p>
            </div>
        </div>
    </div>
</section>


   
<section class="home-intro sec-pad-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <div class="vertical-line right" data-aos="fade-down"></div>
            </div>
            <div class="col-md-7">
               <div class="vertical-line left dropped" data-aos="fade-up" data-aos-delay="300"></div>
                <div class="intro-p-wrap">
                    <p>We specialize in unique, one of a kind pieces, built custom and tailored to perfectly fit your home. We are the largest live edge shop in Toronto, – 10,000 square feet of space, housing our wood shop, metal fabrication, 6,000 board foot kiln and 1000s of slabs to choose from.</p>
                   <a href="<?php echo site_url();?>/about" class="default-link">
                    Learn More
                   <span>
                       <svg width="15" height="13" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5915 16.2934L16.4101 9.88486H0V8.11514H16.4101L10.5915 1.70663L11.8517 0.5L19.5205 9L11.8517 17.5L10.5915 16.2934Z" fill="#743dbc"/></svg>
                   </span>
                   </a>
                </div>
            </div>
        </div>
    </div>
</section>

   
   
<section class="slider-section sec-pad-lg">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2>Portfolio</h2>
                <p class="recent-proj-view-all">
                <a href="#" class="default-link light">
                View All
                   <span>
                       <svg width="15" height="13" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5915 16.2934L16.4101 9.88486H0V8.11514H16.4101L10.5915 1.70663L11.8517 0.5L19.5205 9L11.8517 17.5L10.5915 16.2934Z" fill="#f7f2ee"/></svg>
                   </span>
                </a>
            </p>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="recent-projects-slider">
                <?php
                $args = array (
                'post_type' => array ('post'),
                'orderby' => array( 'menu_order' => 'ASC'),
                'posts_per_page' => 9
                );
                //$args['search_filter_id'] = 84;
                $homeBlogs = new WP_Query($args);                           
                $counter = 0;
                ?>

                    <?php while ( $homeBlogs->have_posts() ) : $homeBlogs->the_post();?>


                   <div class="single-table">
                        <div class="single-blog-img">
                            <a href="<?php the_permalink();?>">
<!--                            <?php the_post_thumbnail(); ?>-->
                               <img src="http://placehold.it/600x380">
                            </a>
<!--
                           <div class="single-blog-date">
                               <span class="day"><?php echo get_the_date("M"); ?></span>
                               <span class="month"><?php echo get_the_date("d"); ?></span>
                           </div>
-->
                           <p class="slider-cat">
                              <?php 
                               $cats = get_the_category(); 
                               
                               ?>
                    <a href="<?php echo site_url();?>/category/<?php echo $cats[0]->slug; ?>"><?php echo $cats[0]->name; ?></a>
                            </p>
                        </div>
                        <div class="single-blog-info">
                            <h3><?php echo get_the_title();?></h3>
<!--
                            <a href="<?php echo get_the_permalink();?>" class="default-link">
                            See more
                           <span>
                               <svg width="15" height="13" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5915 16.2934L16.4101 9.88486H0V8.11514H16.4101L10.5915 1.70663L11.8517 0.5L19.5205 9L11.8517 17.5L10.5915 16.2934Z" fill="#743dbc"/></svg>
                           </span>
                            </a>
-->
                        </div>
                   </div>

                    <?php                                      
                    $counter++;        
                    ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div>
                
                <div class="arrows-recent-proj">
                    <div class="arrows-inner">
                        <span class="prev">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/arrow-prev-light.png">
                       </span>
                        <span class="next">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/arrow-next-light.png">
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


<section class="home-services sec-pad-lg rel">
   <img src="<?php echo get_stylesheet_directory_uri();?>/img/home-service-wood.jpg" class="home-service-hover-img">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2 class="small-title pb-3">Services</h2>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="home-service-list">
                    <li><a href="#">Custom Woodworking</a></li>
                    <li><a href="#">Custom Metal Fabrication</a></li>
                    <li><a href="#">Planing</a></li>
                    <li><a href="#">Wood Cutting</a></li>
                    <li><a href="#">Epoxy</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <p>
                    <a href="#" class="default-link">
                    View All
                       <span>
                           <svg width="15" height="13" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5915 16.2934L16.4101 9.88486H0V8.11514H16.4101L10.5915 1.70663L11.8517 0.5L19.5205 9L11.8517 17.5L10.5915 16.2934Z" fill="#743dbc"/></svg>
                       </span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'global-templates/map' ); ?>

<?php
get_footer();