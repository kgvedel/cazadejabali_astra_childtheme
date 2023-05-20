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

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<section id="footer">
    <section class="left">
	<div class="footer_logo">
		
	</div>
</section>
<section class="right">

	<div class="footer_contact">
		<ul>
			<li><a href="https://goo.gl/maps/swjEAjDChhDWmxaz7"><span class="material-icons">location_on</span>CazadeJabalí, Calle San Miguel 37A, 22583 Arén, España</a></li>
			<li><a href="tel:+34638731397"><span class="material-icons">phone</span>+34 638 731 397</a></li>
			<li><a href="tel:+4530647409"><span class="material-icons">phone</span>+45 30 64 74 09</a></li>
			<li><a href="mailto:tom@cazadejabali.com"><span class="material-icons">email</span>Tom@cazadejabali.com</a></li>
		</ul>
	</div>
</section>
<div class="footer_social">
<ul>
<li><a href="https://www.facebook.com"><span class="fa fa-facebook-official"></span></a></li>
<li><a href="https://www.instagram.com"><span class="fa fa-instagram"></span></a></li>
<li><a href="https://www.youtube.com"><span class="fa fa-youtube"></span></a></li>
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