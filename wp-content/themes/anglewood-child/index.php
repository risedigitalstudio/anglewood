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


<section class="about-hero hero-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
					<header class="page-header">
                        <h1 class="page-title">port</h1>
					</header><!-- .page-header -->
            </div>
        </div>
    </div>
</section>  


<section class="sec-pad">
    <div class="container">
        <div class="row">
        
				<?php
				if ( have_posts() ) {

					while ( have_posts() ) {
						the_post();
                        
                    ?> 
  
                   <div class="col-md-4 single-archive-item">
                        <div class="single-blog-img">
                            <a href="<?php the_permalink();?>">
<!--                            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>-->
                               <img src="http://placehold.it/600x380">
                            </a>
                           <div class="single-blog-date">
                               <span class="day"><?php echo get_the_date("M"); ?></span>
                               <span class="month"><?php echo get_the_date("d"); ?></span>
                           </div>
                           <p class="slider-cat">
                              <?php 
                               $cats = get_the_category(); 
                               
                               ?>
                    <a href="<?php echo site_url();?>/category/<?php echo $cats[0]->slug; ?>"><?php echo $cats[0]->name; ?></a>
                            </p>
                        </div>
                        <div class="single-blog-info">
                            <h3><?php echo get_the_title();?></h3>
                        </div>
                   </div>                     
                       
                <?php
                        
					}
				} 
				?>

        
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php understrap_pagination(); ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
