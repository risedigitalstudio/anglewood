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
            </div>
        </div>
    </div>
</section>  
 
<section class="the-process sec-pad-lg">
    <div class="container">
        <?php for ($i=1; $i<8; $i++) { ?>
            <div class="row process-item">
                <div class="col-md-4">
                    <div class="process-left" data-aos="fade-right">
                        <span class="number">0<?php echo $i;?></span>
                        <h3>Call or visit us</h3>
                    </div>
                </div>
                <div class="col-md-8">
                   <div class="process-right" data-aos="fade-left">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ratione debitis dignissimos reiciendis corporis minima, numquam cumque in earum maxime, magnam officia amet rem animi. Eveniet distinctio commodi harum alias. Eos repudiandae totam, vero, error perferendis aut! Ut, tenetur cupiditate fuga eius repellendus corporis, facilis, doloribus porro perferendis alias eaque.</p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
 
 
<?php get_template_part( 'global-templates/cta-dark' ); ?>


<?php
get_footer();