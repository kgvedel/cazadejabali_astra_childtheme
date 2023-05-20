<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php 
?>

<section id="footer">
    <section class="left">
	<div class="footer_logo"></div>
	<ul>
		<li>foofestival@mail.com</li>
		<li>+45 40043611</li>
	</ul>
</section>
<section class="right">

	<div class="footer_contact">
		<ul>
			<li><a href="https://goo.gl/maps/swjEAjDChhDWmxaz7">CazadeJabalí, Calle San Miguel 37A, 22583 Arén, España</a></li>
			<li><a href="tel:+34638731397">+34 638 731 397</a></li>
			<li><a href="tel:+4530647409">+45 30 64 74 09</a></li>
			<li><a href="mailto:tom@cazadejabali.com">Tom@cazadejabali.com</a></li>
		</ul>
	</div>
</section>
<div class="footer_social">
<ul>
<li><a href="https://www.vildsvinejagt.com/">cloud</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/jagtprogram-2/">Jagtprogram</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/aren/">Arén</a></li>
</ul>
</div>


<div class="footer_menu">
<ul>
<li><a href="https://www.vildsvinejagt.com/">Hjem</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/jagtprogram-2/">Jagtprogram</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/aren/">Arén</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/galleri-2/">Galleri</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/nyheder/">Nyheder</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/kontakt/">Kontakt</a></li>
<li><a href="https://www.vildsvinejagt.com/index.php/faq/">FAQ</a></li>
</ul>
</div>

</section>
</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
</body>

</html>