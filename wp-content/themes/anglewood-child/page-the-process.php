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
                <h1>The Process</h1>
                <p class="intro-p">We create everything from classic wood slab tables to valiant, one-of-a-kind statement pieces to complement your space perfectly. If you’re interested in a custom project with Anglewood, here’s how the process works:</p>
            </div>
        </div>
    </div>
</section>  
 
<section class="the-process sec-pad">
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
 
 
<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();