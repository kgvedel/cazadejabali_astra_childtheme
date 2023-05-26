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

	<style>
		    form {
            background: var(--beige);
            margin: 0 auto;
            border-radius: 4px;
            box-shadow: 4px 8px 12px 4px #180f0d35;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            padding: 1.5rem;
            gap: 1rem;
            max-width: 40rem;
            width: 90%;
        }

        form input {
            min-width: 60%;
            font-family: 'Open Sans';
            min-height: 2rem;
            margin: 0.5rem 0;
            outline: none !important;
        }

        form textarea {
            font-family: 'Open Sans';
        }


        label {
            font-weight: bold;
            font-family: 'Open Sans';
        }



        form section {
            display: flex;
            gap: 2rem;
            flex-direction: column;
        }



        .label_input {
            position: relative;
            display: flex;
            width: 100%;
            flex-direction: column;
            flex: 1 0 48%;
        }

		.navn_efternavn {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            width: 100%;
        }


       /*validation*/
       input:focus,
        select:focus {

            border: 2px solid var(--blue);
        }

        .label_input:focus-within::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: -10px;
            width: 3px;
            background-color: var(--blue);
            height: 0;
            transition: height 0.3s ease-in-out;
        }

        .label_input:focus-within::before {
            animation: expandLine 0.3s forwards;
        }

        @keyframes expandLine {
            0% {
                height: 0;
                bottom: 0;
            }

            100% {
                height: 100%;
                bottom: auto;
                top: 0;
            }
        }

        input:invalid:not(:placeholder-shown) {
            border: 2px solid var(--spanish_red);
        }


        input:valid,
        select:valid {
            border: 2px solid #5ef570;
        }

	</style>
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
						placeholder="Tilføj din kommentar her" required></textarea>
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