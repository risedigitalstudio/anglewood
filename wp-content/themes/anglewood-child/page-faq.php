<?php
/** Template Name: Services **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="service-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="pb-3">FAQ</h1>
                <p class="intro-p">Have a question for us? Check out the list below of frequently asked questions. If you still don’t see what you’re looking for, contact our team and we’ll be more than happy to help.</p>
            </div>
        </div>
    </div>
</section>  


 <section class="faq faq-sec sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="small-title pb-3">Custom Work</h2>
                <div class="accordian-container">
                    <?php
                    $args = array (
                    'post_type' => array ('faq_list'),
                    'orderby' => array( 'menu_order' => 'DESC'),
                    'meta_key' => 'type',
                    'meta_value' => 'Custom Work',
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
            <div class="col-md-6">
                <h2 class="small-title pb-3">Wood Sales</h2>
                <div class="accordian-container">
                    <?php
                    $args = array (
                    'post_type' => array ('faq_list'),
                    'orderby' => array( 'menu_order' => 'DESC'),
                    'meta_key' => 'type',
                    'meta_value' => 'Wood Sales',
                    'posts_per_page' => -1
                    );
                    $faqWoodSalesQuery = new WP_Query($args);
                    ?>


                    <?php while ( $faqWoodSalesQuery->have_posts() ) : $faqWoodSalesQuery->the_post();?>

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



<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();