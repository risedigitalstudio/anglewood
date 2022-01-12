<?php
/** Template Name: Home **/

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

<section class="sub-nav-tables">
    <div class="container-fluid">
        <div class="row">
            <div class="sub-nav-tables-wrap">
                <a href="#for-sale" class="scroll forSaleLink" id="forSale">For Sale</a>
                
                <a href="#portfolio" class="scroll portfolioLink" id="portfolioTab">Portfolio</a>
                
                <a href="#faq" class="scroll faqLink" id="faqTab">FAQ</a>
                
                <a href="#ordering-process" class="scroll orderingProcessLink" id="orderingProcess">Order Process</a>
                
                <a href="#maintenance" class="scroll maintenanceLink" id="maintenanceTab">Maintenance</a>
            </div>
        </div>
    </div>
</section>
   
<section class="for-sale sec-pad-lg" id="for-sale">
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
                        <div class="single-blog-img">
                            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
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
 
 
<section class="portfolio sec-pad-lg" id="portfolio">
    <div class="container">
        <div class="row sec-pad-bot">
            <div class="col-md-12">
                <h2>Portfolio</h2>
            </div>
        </div>
        
        <div class="row">
            <?php
            $args = array (
            'post_type' => array ('post'),
            'posts_per_page' => 12
            );
            $portfolioQuery = new WP_Query($args);
            ?>

            <?php while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post();?>


                   <div class="col-md-4 single-portfolio-item">
                        <div class="single-blog-img">
                           <?php ?>
                            <a href="<?php the_permalink();?>" class="portfolio-img-bg" style="background-image:url(<?php if ( get_the_post_thumbnail($post_id) != '' ) {
                            echo get_the_post_thumbnail_url();} else {
                            echo catch_that_image();
                            } ?>"></a>
                            <?php  ?>
                                                        
<!--                            <a href="<?php the_permalink();?>" class="portfolio-img-bg" style="background-image:url(<?php get_the_post_thumbnail_url(); ?>"></a>-->
                            
                            
                           <p class="single-blog-date">
                               <span class="day"><?php echo get_the_date("M"); ?></span>
                               <span class="month"><?php echo get_the_date("d"); ?></span>
                               <span class="month"><?php echo get_the_date("Y"); ?></span>
                               <span>&nbsp;|&nbsp;&nbsp;</span>
                           </p>
                           
                           <p class="slider-cat">
                              <?php 
                               $cats = get_the_category(); 
                               
                               ?>
<!--                                <a href="<?php echo site_url();?>/category/<?php echo $cats[0]->slug; ?>">-->
                                <?php echo $cats[0]->name; ?>
<!--                                </a>-->
                            </p>
                        </div>
                        <div class="single-blog-info">
                            <a href="<?php the_permalink();?>"><h3><?php echo get_the_title();?></h3></a>
                        </div>
                   </div>     
                   
                   
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>   
        </div>
    </div>
</section>
 
  
<section class="faq sec-pad-lg" id="faq">
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
        </div>
    </div>
</section>
 
 
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
 
  
<section class="maintenance sec-pad-lg" id="maintenance">
    <div class="container">
        <div class="row">
            <h2>Maintenance</h2>
        </div>
    </div>
</section>

</div> <!-- end tables-page -->

<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();