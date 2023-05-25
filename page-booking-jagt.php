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
    <style>
        :root {
            --dark_red: #6b1014;
            --spanish_red: #ad1519;
            --dark_yellow: #d8ab00;
            --spanish_yellow: #fabd00;
            --white: #f9f9f9;
            --beige: #e5dac3;
            --green: #465d52;
            --dark_green: #123929;
            --black: #180f0d;
            --dark_orange: #b45223;
            --orange: #e3530e;
            --blue: #6473ff;
        }

       #booking_jagt_section {
    background-color: var(--green);
    background-image: url(https://www.vildsvinejagt.com/wp-content/uploads/2023/05/topografi_gron.svg);
    background-size: 93rem;
    background-position: -54vw 23vh;
    padding: 4.5rem 0;
    width: 100%;
    max-width: 100%;
}

        .navn_efternavn {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            width: 100%;
        }

        /*this is just a bit general form styling, put it here to make it work, cus wp suxxx*/

        form {
            background: var(--beige);
            margin: 0 auto;
            border: solid;
            border-width: 0.5px;
            border-radius: 4px;
            box-shadow: 4pt 4pt 8pt rgba(0, 0, 0, 0.113);
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
			
        }
		  input:focus,
        input[type=text],
        input[type=email],
        input[type=tel],
        input[type=number],
        select,
        textarea {
border: 2px solid var(--green);
			border-radius:4px;
            outline: none !important;

        }

        form select,
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



        /*validation*/
        input:focus,
        input[type=text]:focus,
        input[type=email]:focus,
        input[type=tel]:focus,
        input[type=number]:focus,
        select:focus,
        textarea:focus {

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


        input:focus:valid, input:required:valid,
        select:required:valid {
            border: 2px solid #5ef570;
        }

        input:focus {

            border: 2px solid var(--blue);
        }
    </style>
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

    <template id="cart">
        <tbody>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td data-field="cart_regu_ticket"></td>
                <td data-field="cart_regu_quantity"></td>
                <td data-field="cart_regu_price"></td>
                <td data-field="cart_regu_total"></td>
            </tr>

            <tr>
                <td data-field="cart_vip_ticket"></td>
                <td data-field="cart_vip_quantity"></td>
                <td data-field="cart_vip_price"></td>
                <td data-field="cart_vip_total"></td>
            </tr>
            <tr>
                <td data-field="cart_two_tent"></td>
                <td data-field="cart_two_tent_quantity"></td>
                <td data-field="cart_two_tent_price"></td>
                <td data-field="cart_two_tent_total"></td>
            </tr>
            <tr>
                <td data-field="cart_four_tent"></td>
                <td data-field="cart_four_tent_quantity"></td>
                <td data-field="cart_four_tent_price"></td>
                <td data-field="cart_four_tent_total"></td>
            </tr>
            <tr>
                <td data-field="cart_booking">Fixed Booking Fee</td>
                <td data-field="cart_booking_quantity">1x</td>
                <td data-field="cart_booking_price">99</td>
                <td data-field="cart_booking_total">99 DKK</td>
            </tr>


            <tr class="total_border">
                <td data-field="card_total_title"><strong>Total</strong></td>
                <td></td>
                <td></td>
                <td data-field="cart_total_total"></td>
            </tr>

        </tbody>
    </template>

    <section id="booking_jagt_section">
        <form id="booking_jagt_form">

            <section id="jagt_dropdown">
                <h4>Vælg jagt</h4>
                <div class="label_input">
                    <label for="valgjagt">Jagtperiode</label>
                    <select id="valgjagt" name="valgjagt" required>
                        <option value="0">3-4-5 November 23 (3 jagtdage)</option>
                        <option value="1">10-11-12 November 23 (3 jagtdage)</option>
                        <option value="2">17-18-19 November 23 (3 jagtdage)</option>
                        <option value="3">24-25-26 November 23 (3 jagtdage)</option>
                        <option value="4">2-3 December 23 (2 jagtdage)</option>
                        <option value="5">12-13-14 Januar 24 (3 jagtdage)</option>
                    </select>
                </div>
            </section>
            <h4>Vælg deltagere</h4>
            <section id="valg_af_deltagere">
                <div class="label_input">
                    <label for="jaegere">Jægere</label>
                    <input type="number" id="jaegere" name="jaegere" min="10" max="16" placeholder="Indtast antal jægere" required>
                </div>
                <div class="label_input">
                    <label for="ledsagere">Ledsagere</label>
                    <input type="number" id="ledsagere" name="ledsagere" placeholder="Indtast antal ledsagere" min="0" max="10">
                </div>
            </section>
            <section id="oplysninger">
                <h4>Dine oplysninger</h4>
                <div class="navn_efternavn">
                    <div class="label_input">
                        <label for="fornavn">Fornavn</label>
                        <input type="text" name="fornavn" id="fornavn" minlength="2" placeholder="Indtast dit fornavn"
                            required>
                    </div>
                    <div class="label_input">
                        <label for="efternavn">Efternavn</label>
                        <input type="text" name="efternavn" id="efternavn" minlength="2" placeholder="Indtast dit efternavn"
                            required>
                    </div>
                </div>

                <div class="label_input">
                    <label for="mail">Email*</label>
                    <input type="email" id="mail" name="mail" placeholder="dinemail@mail.com" required>
                </div>
                <div class="label_input">
                    <label for="number">Mobil/telefon nummer</label>
                    <input type="tel" id="phone" name="phone" maxlength="8" pattern="[0-9]+"
                        placeholder="Indtast telefonnummer" required>
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
  <script>
        "use strict";
        window.addEventListener("DOMContentLoaded", start);

        let bookingInfo = {
            jagtperiode: "",
            jaegere: "",
            ledsagere: "",
            fuldenavn: "",
            email: "",
            telefon: "",
            besked: "",
            total_pris: ""
        }

        function start() {

            const form = document.querySelector("form");
            //document.getElementById("booking_jagt_form").addEventListener("submit", saveCostumerOrder);
            saveCostumerOrder();
        }

        function saveCostumerOrder() {
            const costumerForm = document.querySelector("#booking_jagt_form");
            const jagtPeriode = "Jagtperiode: " + costumerForm.elements.valgjagt.value;
            const antalJaegere = "Antal jægere: " + costumerForm.elements.jaegere.value;
            const antalLedsagere = "Antal ledsagere: " + costumerForm.elements.ledsagere.value;
            const fuldeNavn = "Fulde navn: " + costumerForm.elements.fornavn.value + "  " + costumerForm.elements.efternavn.value;
            const email = "Email: " + costumerForm.elements.mail.value;
            const telefon = "Telefonnummer: " + costumerForm.elements.phone.value;
            const dinBesked = "Deres besked" + costumerForm.elements.besked.value;

            //create new order object from Orderinfo template
            let nyBookingInfo = Object.create(bookingInfo);

            //combining all the information from tickets and reservation in the order object, by using spread
            nyBookingInfo.jagtperiode = jagtPeriode;
            nyBookingInfo.antalJaegere = antalJaegere;
            nyBookingInfo.antalLedsagere = antalLedsagere;
            nyBookingInfo.fuldeNavn = fuldeNavn;
            nyBookingInfo.email = email;
            nyBookingInfo.telefon = telefon;
            nyBookingInfo.dinBesked = dinBesked;
            console.log(nyBookingInfo);
        }

    </script>

<?php if (astra_page_layout() == 'right-sidebar'): ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>