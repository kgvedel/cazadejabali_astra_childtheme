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

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="style.css">


<footer>

	<section id="sfooter">
		<section class="footer_top">
			<section class="left">
				<div id="footer_logo">
					<img src="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/green.svg"
						alt="grafik_logo_vildsvin">
				</div>
			</section>
			<section class="right">
				<div class="footer_contact">
					<ul class="contact">
						<li><a href="https://goo.gl/maps/swjEAjDChhDWmxaz7" target="_blank"><span
									class="material-icons">location_on</span>CazadeJabalí, Calle San Miguel 37A, 22583
								Arén, España</a></li>
						<li><a href="tel:+34638731397"><span class="material-icons">phone</span>+34 638 731 397</a></li>
						<li><a href="tel:+4530647409"><span class="material-icons">phone</span>+45 30 64 74 09</a></li>
						<li><a href="mailto:tom@cazadejabali.com" target="_blank"><span
									class="material-icons">email</span>Tom@cazadejabali.com</a></li>
					</ul>
				</div>
			</section>
		</section>

		<section id="footer_nyhedsbrev_section">
			<section id="nyhedsbrev">
				<div id="tekst">
					<h4>Tilmeld nyhedsbrev</h4>
				</div>
				<form class="footer_nyhedsbrev_form">
					<div class="footer_form_group">
						<label for="email">Email <span class="required">*</span></label>
						<input class="footer_input" type="email" id="email" name="Email" placeholder="Indtast email"
							required>
					</div>

					<div class="sign_btn">
						<button id="sign_up" type="submit">Tilmeld Nyhedsbrev</button>
					</div>
				</form>
			</section>
		</section>
		<section class="footer_middle">
			<div class="footer_social">
				<ul class="social">
					<li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-official"
								style="font-size:60px;color:red;"></i></a></li>
					<li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"
								style="font-size:60px;color:red;"></i></a>
					</li>
					<li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"
								style="font-size:60px;color:red;"></i></a>
					</li>
				</ul>
			</div class="footer_download">
			<ul class="download">
				<li><a target="_blank" class="jp-btn"
						href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/Cazadejabali_jagtprogram.pdf">Jagtprogram</a>
				</li>
				<li><a target="_blank" class="jp-btn"
						href="https://www.vildsvinejagt.com/wp-content/uploads/2023/05/CazadeJabali_flyer-1.pdf">Flyer</a>
				</li>
				<li><a target="_blank" class="jp-btn" href="https://www.google.com">Plakat</a></li>
			</ul>
			</div>
		</section>
		<section class="footer_bottom">
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
	</section>
</footer>

</div><!-- #page -->

<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>