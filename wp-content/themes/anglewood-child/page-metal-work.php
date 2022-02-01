<?php
/** Template Name: Home **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="slabs-page">
   
<section class="process-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Metal Work</h1>
                <p class="intro-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat amet aut a neque repellendus quos sapiente odio quasi placeat magni harum, soluta nostrum! Nostrum, assumenda.</p>
            </div>
        </div>
    </div>
</section>  

   
<section class="metal-work-intro sec-pad">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <a href="https://anglewoodstore.com/" class="default-btn visit-slab-store">View our online inventory</a>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-carousel">
                        <?php 
                            $sliderImgs = get_field('slider_images');
                            foreach($sliderImgs as $sliderImg) {
                                echo wp_get_attachment_image($sliderImg['image'], "large", "", array('class'=>'carousel-cell') );
                            }
                        ?>
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



<?php /* ?>
<section class="faq sec-pad-lg-bot">
    <div class="container">
        <div class="row sec-pad-bot">
            <div class="col-md-12">
                <h2>FAQ</h2>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="accordian-container">
                    <?php
                    $args = array (
                    'post_type' => array ('faq_list'),
                    'orderby' => array( 'menu_order' => 'DESC'),
                    'meta_key' => 'type',
                    'meta_value' => 'Wood Sales',
                    'posts_per_page' => -1
                    );
                    $faqCustomWorkQuery = new WP_Query($args);
                    ?>


                    <?php while ( $faqCustomWorkQuery->have_posts() ) : $faqCustomWorkQuery->the_post();?>

                          <div class="set">
                            <a href="#" class="set-a">
                              <div class="title"><?php echo the_title();?></div>
                              <i class="minus" style="display:none;">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.272 10.7278L0.183691 10.7278" stroke="black"/>
                                </svg>
                              </i>
                              <i class="plus" style="display: block;">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.728 21.2721V0.183813" stroke="black"/>
                                <path d="M21.272 10.7278L0.183691 10.7278" stroke="black"/>
                                </svg>
                              </i>
                            </a>
                            <div class="content justify">
                              <?php echo the_content();?>
                            </div>
                          </div>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?> 
            </div>
            </div>
        </div>
    </div>
</section>


<?php */ ?>

</div> <!-- end tables-page -->


<?php get_template_part( 'global-templates/map-black' ); ?>

<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();