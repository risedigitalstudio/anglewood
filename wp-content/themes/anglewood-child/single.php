<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="about-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
					<header class="page-header">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                        <p class="single-date"><?php echo get_the_date();?></p>
					</header><!-- .page-header -->
            </div>
        </div>
    </div>
</section>  


<section class="single-portfolio sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

				<?php
				while ( have_posts() ) {
					the_post();
					the_content();
//					understrap_post_nav();
				}
				?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php understrap_post_nav(); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
