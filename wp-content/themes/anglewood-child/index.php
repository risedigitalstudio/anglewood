<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>


<div class="tables-page">

<section class="process-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tables</h1>
                <p class="intro-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat amet aut a neque repellendus quos sapiente odio quasi placeat magni harum, soluta nostrum! Nostrum, assumenda.</p>
            </div>
        </div>
    </div>
</section>  




<!--
<section class="sub-nav-tables">
    <div class="container-fluid">
        <div class="row">
            <div class="sub-nav-tables-wrap">
                <a href="#for-sale" class="scroll forSaleLink" id="forSale">For Sale</a>
                
                <a href="#ordering-process" class="scroll orderingProcessLink" id="orderingProcess">Order Process</a>
                
                <a href="#portfolio" class="scroll portfolioLink" id="portfolioTab">Portfolio</a>
            </div>
        </div>
    </div>
</section>
-->
   
<section class="for-sale sec-pad" id="for-sale">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>For Sale</h2>
                <p>These are tables that are currently for sale. Please call us or visit our warehouse if you're interested in any of them.</p>
            </div>
        </div>
        <div class="row sec-pad-top">
            <?php
            $args = array (
            'post_type' => array ('tables_for_sale'),
            'orderby' => array( 'menu_order' => 'DESC'),
            'posts_per_page' => -1
            );
            $tablesForSaleQuery = new WP_Query($args);

            $forSaleCounter = 1;
            ?>


            <?php while ( $tablesForSaleQuery->have_posts() ) : $tablesForSaleQuery->the_post();?>

            
                   <div class="col-md-4 single-forsale-item">
                        <div class="single-blog-img <?php if (get_field('sold')) {echo 'sold';} ?>">
                            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                            <?php if (get_field('sold')) {echo '<div class="sold-tag">Sold</div>';} ?>
                        </div>
                        <div class="single-blog-info">
                           <p class="price"><?php echo get_field('price');?></p>
                            <h3><?php echo get_the_title();?></h3>
                            <?php if (get_field('type')) { ?>
                                <p>Type: <?php echo get_field('type');?></p>
                            <?php } ?>
                            
                            <?php if (get_field('wood_type')) { ?>
                                <p>Wood: <?php echo get_field('wood_type');?></p>
                            <?php } ?>
                            
                            <?php if (get_field('epoxy')) { ?>
                                <p>Epoxy: <?php echo get_field('epoxy');?></p>
                            <?php } ?>
                            
                            <?php if (get_field('finish')) { ?>
                                <p>Finish: <?php echo get_field('finish');?></p>
                            <?php } ?>
                            
                            <?php if (get_field('dimensions')) { ?>
                                <p>Dimensions: <?php echo get_field('dimensions');?></p>
                            <?php } ?>
                        </div>
                   </div>   
                   
                   
            <?php $forSaleCounter++; ?>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>   
        </div>
    </div>
</section>
 
 
 <?php /* ?>
<section class="the-process sec-pad-lg" id="ordering-process">
    <div class="container">
            <div class="row sec-pad-bot">
                <div class="col-md-12">
                    <h2>Order Process</h2>
                </div>
            </div>

            <?php
            $args = array (
            'post_type' => array ('process'),
            'orderby' => array( 'menu_order' => 'DESC'),
            'posts_per_page' => -1
            );
            $processQuery = new WP_Query($args);

            $counter = 1;
            ?>


            <?php while ( $processQuery->have_posts() ) : $processQuery->the_post();?>


            <div class="row process-item">
                <div class="col-md-4">
                    <div class="process-left" data-aos="fade-right">
                        <span class="number">0<?php echo $counter;?></span>
                        <h3><?php echo the_title();?></h3>
                    </div>
                </div>
                <div class="col-md-8">
                   <div class="process-right" data-aos="fade-left">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
                   
            <?php $counter++; ?>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>   

    </div>
</section>
 
 <?php */ ?>
 
 
<section class="portfolio sec-pad-lg" id="portfolio">
    <div class="container">
        <div class="row sec-pad-bot">
            <div class="col-md-12">
                <h2>Portfolio</h2>
            </div>
        </div>


        <div class="row">
            <?php echo do_shortcode('[searchandfilter id="5302"]'); ?>
        </div>     

<!--        <div class="row" id="main">-->
            <?php echo do_shortcode('[searchandfilter id="5302" show="results"]'); ?>
<!--        </div>  -->

       
        <?php /* echo do_shortcode('[ajax_load_more id="alm-archive" archive="true" container_type="div" post_type="post" pause="false" scroll="true" posts_per_page="15" offset="12" no_results_text="<div class=\'no-results\'>Sorry, there are no more results</div>" transition_container_classes="row"]'); */ ?>

           
<!--
        <div class="row">
            <div class="col-md-12">
                <?php /* understrap_pagination(); */ ?>
            </div>
        </div>
   
-->

    </div>
</section>
 


</div> <!-- end tables-page -->

<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();

?>


