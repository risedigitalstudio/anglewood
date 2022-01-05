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
                <h1 class="pb-3">Services</h1>
            </div>
        </div>
    </div>
</section>  


 <section class="service-sec sec-pad-top">
   <div class="container">
       <div class="row">
           <div class="col-md-12 px-0">
               <h2 class="small-title pb-3">Products &amp; Services</h2>
           </div>
       </div>
   </div>
    <div class="container">

<!--                   Services for Woodworkers-->
                    <?php
                    $args = array (
                    'post_type' => array ('aw_services'),
                    'orderby' => array( 'menu_order' => 'DESC'),
                    'meta_key' => 'type',
                    'meta_value' => 'Products & Services',
                    'posts_per_page' => -1
                    );
                    $serviceQuery = new WP_Query($args);
                    ?>


                    <?php while ( $serviceQuery->have_posts() ) : $serviceQuery->the_post();?>

            
                    <div class="row sec-pad-bot">
                        <div class="col-md-5 px-0">
                            <?php the_post_thumbnail('services');?>
                            <div class="arrow-left"></div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="service-info flex-height">
                                <h3><?php the_title();?></h3>
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>


                    <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>   

    </div>
</section>  



 <section class="service-sec sec-pad-bot">
   <div class="container">
       <div class="row">
           <div class="col-md-12 px-0">
               <h2 class="small-title pb-3">Services for Woodworkers</h2>
           </div>
       </div>
   </div>
    <div class="container">

<!--                   Services for Woodworkers-->
                    <?php
                    $args = array (
                    'post_type' => array ('aw_services'),
                    'orderby' => array( 'menu_order' => 'DESC'),
                    'meta_key' => 'type',
                    'meta_value' => 'Services for Woodworkers',
                    'posts_per_page' => -1
                    );
                    $serviceQuery = new WP_Query($args);
                    ?>


                    <?php while ( $serviceQuery->have_posts() ) : $serviceQuery->the_post();?>

            
                    <div class="row sec-pad-bot">
                        <div class="col-md-5 px-0">
                            <?php the_post_thumbnail('services');?>
                            <div class="arrow-left"></div>
                        </div>
                        <div class="col-md-7 px-0">
                            <div class="service-info flex-height">
                                <h3><?php the_title();?></h3>
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>


                    <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>   

    </div>
</section>  
 

<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();