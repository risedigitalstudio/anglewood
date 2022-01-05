<?php
/** Template Name: Home **/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

   
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
                <a href="#for-sale" class="forSaleLink" id="forSale">For Sale</a>
                
                <a href="#portfolio" class="portfolioLink" id="portfolioTab">Portfolio</a>
                
                <a href="#faq" class="faqLink" id="faqTab">FAQ</a>
                
                <a href="#ordering-process" class="orderingProcessLink" id="orderingProcess">Ordering Process</a>
                
                <a href="#maintenance" class="maintenanceLink" id="maintenanceTab">Maintenance</a>
            </div>
        </div>
    </div>
</section>
   
<section class="for-sale sec-pad-lg" id="for-sale">
    <div class="container-fluid">
        <div class="row">
            <h1>For Sale</h1>
        </div>
    </div>
</section>
 
 
<section class="portfolio sec-pad-lg" id="portfolio">
    <div class="container-fluid">
        <div class="row">
            <h1>Portfolio</h1>
        </div>
    </div>
</section>
 
  
<section class="faq sec-pad-lg" id="faq">
    <div class="container-fluid">
        <div class="row">
            <h1>FAQ</h1>
        </div>
    </div>
</section>
 
 
<section class="the-process sec-pad" id="ordering-process">
    <div class="container">
       

            <?php
            $args = array (
            'post_type' => array ('process'),
            'orderby' => array( 'menu_order' => 'DESC'),
            'posts_per_page' => -1
            );
            $serviceQuery = new WP_Query($args);

            $counter = 1;
            ?>


            <?php while ( $serviceQuery->have_posts() ) : $serviceQuery->the_post();?>


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
    <div class="container-fluid">
        <div class="row">
            <h1>Maintenance</h1>
        </div>
    </div>
</section>



<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();