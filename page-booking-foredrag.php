<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if (astra_page_layout() == 'left-sidebar'): ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<?php astra_content_page_loop(); ?>

	<?php astra_primary_content_bottom(); ?>

	<section id="booking_info">
		<h2>Booking</h2>

		<div class="btn_jagtforedrag_group">
			<button>Jagt</button>
			<button>Foredrag</button>
		</div>

		<div class="info_container">
			<div class="info_wrapper">
				<h4>Betalingsbetingelser</h4>
				<p>Der indbetales €250 depositum ved bestilling som modregnes ved afregning. Ved afbestilling vil dette
					beløb
					tilbagebetales indtil 5 måneder før første jagtdag. 4 måneder før første jagtdag betales €640. Ved
					afbestilling vil dette beløb tilbagebetales indtil 3 måneder før første jagtdag.
					Ved ankomsten til Arén og inden indkvartering skal restbeløbet på €1.000 være modtaget på vores
					bankkonto
					eller erlægges kontant. (SEPA betalinger i EUR er gratis indenfor EU)</p>
				<h5>Tillæg:</h5>
				<p>Vi gør opmærksom på at der er tillæg for jagt licens på €35 for Aragon og €47 for Katalonien. Da
					nogle
					jagter
					kun er i en region og andre er i begge, kan vi derfor ikke inkludere dem i den samlede pris. Vær
					derfor
					opmærksom på et €35 - €82 stigning i forhold til den sanmlede pris.</p>
			</div>
			<div class="info_wrapper">
				<h2>Billede</h2>
			</div>
		</div>
	</section>


	<section id="booking_oplysninger_foredrag">
		<form id="booking_oplysning_foredrag">

			<section id="oplysninger">
				<h4>Dine oplysninger</h4>
				<div class="navn_efternavn">
					<div class="label_input">
						<label for="fornavn">Fornavn</label>
						<input type="text" name="fornavn" id="fornavn" required>
					</div>
					<div class="label_input">
						<label for="efternavn">Efternavn</label>
						<input type="text" name="efternavn" id="efternavn" required>
					</div>
				</div>

				<div class="label_input">
					<label for="mail">Email*</label>
					<input type="email" id="mail" name="mail" required>
				</div>
				<div class="label_input">
					<label for="number">Mobil/telefon nummer</label>
					<input type="tel" id="phone" name="phone" maxlength="8" pattern="[0-9]+">
				</div>
			</section>

			<section id="kommentar">
				<h4>Kommentar til din booking</h4>
				<div class="label_input">
					<label for="besked">Besked</label>
					<textarea name="besked" id="besked" cols="30" rows="10"
						placeholder="Tilføj din kommentar her"></textarea>
				</div>
			</section>

			<div class="send_btn">
				<button class="send_btn" type="submit">Send</button>
			</div>

		</form>
	</section>


</div><!-- #primary -->

<?php if (astra_page_layout() == 'right-sidebar'): ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>