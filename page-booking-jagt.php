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

	<section id="booking_jagt_section">
		<form id="valg_jagt_form">

			<section id="jagt_dropdown">
				<h4>Vælg jagt</h4>
				<div class="label_input">
					<label for="valg_af_jagt">Jagtperiode</label>
					<select id="valg_af_jagt" name="valg_af_jagt">
						<option value="periode_et">3-4-5 November 23 (3 jagtdage)</option>
						<option value="periode_to">10-11-12 November 23 (3 jagtdage)</option>
						<option value="periode_tre">17-18-19 November 23 (3 jagtdage)</option>
						<option value="periode_fire">24-25-26 November 23 (3 jagtdage)</option>
						<option value="periode_fem">2-3 December 23 (2 jagtdage)</option>
						<option value="periode_seks">12-13-14 Januar 24 (3 jagtdage)</option>
					</select>
				</div>
			</section>
			<h4>Vælg deltagere</h4>
			<section id="valg_af_deltagere">
				<div class="label_input">
					<label for="jaegere">Jægere</label>
					<input type="number" id="jaegere" name="jaegere" min="10" max="16" required>
				</div>
				<div class="label_input">
					<label for="ledsagere">Ledsagere</label>
					<input type="number" id="ledsagere" name="ledsagere" min="0" max="10">
				</div>
			</section>

			<section id="ophold">
				<h4>Tilvælg enkeltværelse</h4>
				<p>Tilvalg af enkeltværelser er €50 pr nat</p>
				<label for="enkeltvaereslse">Ja tak</label>
				<input type="radio" id="enkeltvaereslse" name="enkeltvaereslse">
				<div class="label_input">
					<label for="antal_vaerelser">Antal enkeltværelser</label>
					<input type="number" id="antal_vaerelser" name="antal_jaegere" min="1" max="16">
				</div>
			</section>

			<section id="forlaenge">
				<h4>Ønskes i at forlænge opholdet og opleve Spanien?</h4>
				<p>Ekstra dage er €65 pr nat (uden forplejning) </p>
				<div class="forlaeng_radio_group">
					<label for="forlaeng_ja">Ja tak</label>
					<input type="radio" id="forlaeng_ja" name="forlaeng_ja">
					<label for="forlaeng_nej">Nej tak</label>
					<input type="radio" id="forlaeng_nej" name="forlaeng_nej">
				</div>

				<div class="ekstra_dage">
					<h4>Tilføj antal ekstradage</h4>
					<div class="ekstra_dage_group">
						<div class="label_input">
							<label for="ekstra_start">Ekstra dage i starten</label>
							<input type="number" id="ekstra_start" name="ekstra_start" min="0" max="10">
						</div>
						<div class="label_input">
							<label for="ekstra_slut">Ekstra dage i slutningen</label>
							<input type="number" id="ekstra_slut" name="ekstra_slut" min="0" max="10">
						</div>
					</div>
				</div>
			</section>
			<div class="videre_btn">
				<button class="videre_btn" type="submit">Videre</button>
			</div>
		</form>
	</section>

	<section id="booking_oplysninger">
		<form id="booking_oplysning">
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