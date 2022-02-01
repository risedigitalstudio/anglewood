<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $query->have_posts() )
{
	?>
	
	<div class="row">
	    <div class="col-md-12">
	        Found <?php echo $query->found_posts; ?> Results<br />
	    </div>
	</div>
	<div class='search-filter-results-list row'>
	<?php
		while ($query->have_posts())
		{
			$query->the_post();
			
			?>
			
                   <div class="col-md-4 single-portfolio-item search-filter-result-item">
                        <div class="single-blog-img">
                            <a href="<?php the_permalink();?>" class="portfolio-img-bg" style="background-image:url(<?php if ( get_the_post_thumbnail($post_id) != '' ) {
                                echo get_the_post_thumbnail_url();} else {
                                echo catch_that_image();
                            } ?>"></a>
                          
                            <?php /* ?>
                            <a href="<?php the_permalink();?>" class="portfolio-img-bg" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>"></a>
                            <?php */ ?>
                          
                           <p class="single-blog-date">
                               <span class="day"><?php echo get_the_date("M"); ?></span>
                               <span class="month"><?php echo get_the_date("d"); ?></span>
                               <span class="month"><?php echo get_the_date("Y"); ?></span>
                           </p>
                           
                           <p class="slider-cat">
                             <span class="sep">|</span>
                              <?php 
                               $cats = get_the_category(); 
                               
                               ?>
                                <?php echo $cats[0]->name; ?>
                            </p>
                        </div>
                        <div class="single-blog-info">
                            <a href="<?php the_permalink();?>"><h3><?php echo get_the_title();?></h3></a>
                        </div>
                   </div>   
			
			
			<?php /* ?>
			<div class='search-filter-result-item'>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<p><br /><?php the_excerpt(); ?></p>
				<?php 
					if ( has_post_thumbnail() ) {
						echo '<p>';
						the_post_thumbnail("small");
						echo '</p>';
					}
				?>
				<p><?php the_category(); ?></p>
				<p><?php the_tags(); ?></p>
				<p><small><?php the_date(); ?></small></p>
				
				<hr />
			</div>
			
			<?php */ ?>
			
			<?php
		}
	?>
	</div>
<?php
}
else
{
	?>
	<div class='search-filter-results-list' data-search-filter-action='infinite-scroll-end'>
		<span>End of Results</span>
	</div>
	<?php
}
?>