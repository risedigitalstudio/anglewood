<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


<footer class="footer sec-pad-lg" id="main-footer">
    <div class="container">
        <div class="row">
        <div class="flex">
            <div class="one">
                <?php the_custom_logo(); ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt pariatur quae quas eum ipsum cumque necessitatibus, ex iure corporis.</p>
            </div>
            <div class="one">
                <h2>Services</h2>
                
<?php
$args = array (
'post_type' => array ('aw_services'),
'orderby' => array( 'menu_order' => 'ASC'),
'posts_per_page' => -1
);
$serviceQuery = new WP_Query($args);
?>

<ul>
                
<?php while ( $serviceQuery->have_posts() ) : $serviceQuery->the_post();?>
            
        <li><?php echo the_title(); ?></li>

<?php endwhile; ?>
            
    <?php wp_reset_postdata(); ?>   
</ul>             
                
            </div>
            <div class="one">
                <h2>Hours</h2>
                <ul>
                    <li>Mon: CLOSED</li>
                    <li>Tues: 9am - 5pm</li>
                    <li>Wed: 9am - 5pm</li>
                    <li>Thurs: 9am - 5pm</li>
                    <li>Fri: 9am - 5pm</li>
                    <li>Sat: 10am - 3pm</li>
                    <li>Sun: 10am - 3pm</li>
                </ul>
            </div>
            <div class="one">
                <h2>Social &amp; Contact</h2>
                <p><a href="https://www.google.com/maps/place/810+Flint+Rd,+Toronto,+ON+J7H+0E7/@43.7747253,-79.4840022,17z/data=!3m1!4b1!4m5!3m4!1s0x882b2e11d4522f4f:0x3e2f86ab36119c00!8m2!3d43.7747253!4d-79.4818135" target="_blank">810 Flint Rd. <br>North York, ON M3J 2J5</a></p>
                <p><a href="mailto:contact@anglewood.ca">contact@anglewood.ca</a></p>
                <p><a href="tel:+16477179792">(647) 717-9792</a></p>
                <p class="social">
                    <a href="https://www.facebook.com/anglewoodcustomfurniture" target="_blank" class="no-underline"><i class="fa fa-facebook"></i>&nbsp;</a>
                    <a href="https://www.instagram.com/anglewoodfurniture" target="_blank" class="no-underline"><i class="fa fa-instagram"></i>&nbsp;</a>
                </p>
            </div>
        </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

